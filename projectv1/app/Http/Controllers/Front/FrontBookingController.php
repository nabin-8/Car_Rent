<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\City;
use Illuminate\Http\Request;

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
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required',
            ]
        );

        return redirect()->route('home')->with('success', 'Your booking has been submitted successfully.');
    }
}
