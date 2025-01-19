<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Car;
use App\Models\CarCategory;
use App\Models\City;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $total_users = User::count();
        $total_bookings = Booking::count();
        $total_cars = Car::count();
        $total_car_categories = CarCategory::count();
        $total_cities = City::count();
        return view('admin.dashboard', compact('total_users', 'total_bookings', 'total_cars', 'total_car_categories', 'total_cities'));
    }

    public function user()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function booking()
    {
        $bookings = Booking::with('car', 'user')->get();
        $latestBookings = Booking::where('created_at', '>=', Carbon::now()->subDay())->orWhere('created_at', '>=', Carbon::now()->subYear())->orderBy('created_at', 'desc')->take(3)->get();
        return view('admin.booking', compact('bookings', 'latestBookings'));
    }

    public function booking_approve($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = $booking->status === 'complete' ? 'pending' : 'complete';
        $booking->save();

        $message = $booking->status === 'complete' ? 'Booking approved successfully.' : 'Booking status set to pending.';
        return redirect()->route('admin_booking_index')->with('success', $message);
    }

    public function booking_view($id)
    {
        $booking = Booking::with('car', 'user')->findOrFail($id);
        return view('admin.view_booking', compact('booking'));
    }

    public function booking_delete($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('admin_booking_index')->with('success', 'Booking deleted successfully.');
    }
}
