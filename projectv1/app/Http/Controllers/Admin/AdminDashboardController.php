<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Car;
use App\Models\CarCategory;
use App\Models\City;
use App\Models\User;
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
        return view('admin.booking');
    }
}
