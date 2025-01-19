<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Car;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontBookingController extends Controller
{
    public function booking($slug)
    {
        $car = Car::with('car_category')->where('slug', $slug)->first();
        $cities = City::get();
        return view('front.booking', compact('car', 'cities'));
    }

    public function booking_submit(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'car_id' => 'required',
            'city_id' => 'required',
            'pickup_date' => 'required',
            'drop_date' => 'required',
            'license_number' => 'required',
            'license_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'total_days' => 'required',
            'amount' => 'required',
        ]);

        // Handle file upload
        if ($request->hasFile('license_photo')) {
            $image = $request->file('license_photo');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            $licensePhotoPath = $name;
        } else {
            $licensePhotoPath = null;
        }

        // Generate unique transaction ID
        $transaction_uuid = uniqid();

        // Prepare eSewa payment form data
        $amount = $request->amount;
        $successUrl = route('payment.success');
        $failureUrl = route('payment.failure');

        // Save booking data to session to use after payment verification
        $bookingData = $request->except('license_photo');
        $bookingData['transaction_uuid'] = $transaction_uuid;
        $bookingData['license_photo'] = $licensePhotoPath;
        session(['bookingData' => $bookingData]);

        // Redirect to eSewa payment gateway
        return redirect()->away("https://uat.esewa.com.np/epay/main?amt={$amount}&pdc=0&psc=0&txAmt=0&tAmt={$amount}&pid={$transaction_uuid}&scd=epay_payment&su={$successUrl}&fu={$failureUrl}");
    }

    public function payment_success(Request $request)
    {
        $pid = $request->oid;
        $amount = $request->amt;
        $refId = $request->refId;

        // Verify payment with eSewa
        $response = Http::get("https://uat.esewa.com.np/epay/transrec", [
            'amt' => $amount,
            'scd' => 'epay_payment',
            'pid' => $pid,
            'rid' => $refId,
        ]);

        if ($response->successful() && strpos($response->body(), 'Success') !== false) {
            $bookingData = session('bookingData');

            if (!$bookingData) {
                return redirect()->route('home')->with('error', 'Booking data not found.');
            }

            // Save booking information
            $booking = new Booking();
            $booking->user_id = $bookingData['user_id'];
            $booking->car_id = $bookingData['car_id'];
            $booking->city_id = $bookingData['city_id'];
            $booking->pickup_date = $bookingData['pickup_date'];
            $booking->drop_date = $bookingData['drop_date'];
            $booking->license_number = $bookingData['license_number'];
            $booking->license_photo = $bookingData['license_photo'];
            $booking->total_days = $bookingData['total_days'];
            $booking->status = 'pending';
            $booking->payment_status = 'paid';
            $booking->amount = $bookingData['amount'];
            $booking->save();

            session()->forget('bookingData');

            return redirect()->route('home')->with('success', 'Your booking has been submitted successfully, We will contact you soon.');
        } else {
            return redirect()->route('home')->with('error', 'Payment verification failed.');
        }
    }

    public function payment_failure()
    {
        return redirect()->route('home')->with('error', 'Payment failed.');
    }
}