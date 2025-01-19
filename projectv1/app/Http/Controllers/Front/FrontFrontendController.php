<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarCategory;
use Illuminate\Http\Request;

class FrontFrontendController extends Controller
{
    public function home()
    {
        $cars = Car::all();
        return view('front.home', compact('cars'));
    }

    public function car($slug)
    {
        $car = Car::with('car_category')->where('slug', $slug)->first();
        if (!$car) {
            abort(404);
        }
    
        $recent_cars = Car::orderBy('created_at', 'desc')
            ->where('id', '!=', $car->id)
            ->take(7)
            ->get();
        $car_categories = CarCategory::with('cars')
            ->take(5)
            ->get();
    
        return view('front.car', compact('car', 'recent_cars', 'car_categories'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function client()
    {
        return view('front.client');
    }

    public function vehicles()
    {
        $cars = Car::all();
        return view('front.vehicles', compact('cars'));
    }

    public function services()
    {
        return view('front.services');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
