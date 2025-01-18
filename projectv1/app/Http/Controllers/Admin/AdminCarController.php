<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarCategory;
use App\Models\CarPhoto;
use Illuminate\Http\Request;

class AdminCarController extends Controller
{
    public function index()
    {
        $cars = Car::with('car_category')->get();
        return view('admin.car.index', compact('cars'));
    }

    public function create()
    {
        $car_categories = CarCategory::get();
        return view('admin.car.create', compact('car_categories'));
    }

    public function create_submit(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => 'required',
                'car_category_id' => 'required',
                'price_per_day' => 'required',
                'featured_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],[
                'featured_photo.max' => 'The photo may not be greater than 2MB.',
            ]
        );
    
        $car = new Car();
        $car->name = $request->name;
        $car->slug = $request->slug;
        $car->car_category_id = $request->car_category_id;
        $car->price_per_day = $request->price_per_day;
        $car->discounted_price = $request->discounted_price;
        $car->vehicle_type = $request->vehicle_type;
        $car->company = $request->company;
        $car->model = $request->model;
        $car->seats = $request->seats;
        $car->suitcase = $request->suitcase;
        $car->short_description = $request->short_description;
        $car->description = $request->description;
    
        if ($request->hasFile('featured_photo')) {
            $file = $request->file('featured_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $car->featured_photo = $filename;
        }
    
        $car->save();
    
        return redirect()->route('admin_car_index')->with('success', 'Car is created successfully!');
    }

    public function edit($id)
    {
        $car = Car::where('id', $id)->first();
        $car_categories = CarCategory::get();
        return view('admin.car.edit', compact('car', 'car_categories'));
    }

    public function edit_submit(Request $request, $id)
    {
        $car = Car::where('id', $id)->first();
        $request->validate(
            [
                'name' => 'required',
                'slug' => 'required',
                'car_category_id' => 'required',
                'price_per_day' => 'required',
            ]
        );
        $car->name = $request->name;
        $car->slug = $request->slug;
        $car->car_category_id = $request->car_category_id;
        $car->price_per_day = $request->price_per_day;
        $car->discounted_price = $request->discounted_price;
        $car->vehicle_type = $request->vehicle_type;
        $car->company = $request->company;
        $car->model = $request->model;
        $car->seats = $request->seats;
        $car->suitcase = $request->suitcase;
        $car->short_description = $request->short_description;
        $car->description = $request->description;

        if ($request->hasFile('featured_photo')) {
            $request->validate(
                [
                    'featured_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ],[
                    'featured_photo.max' => 'The photo may not be greater than 2MB.',
                ]
            );
            $file = $request->file('featured_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $car->featured_photo = $filename;
        }
        $car->save();

        return redirect()->route('admin_car_index')->with('success', 'Car updated successfully!');
    }
    
    public function delete($id)
    {
        $total = CarPhoto::where('car_id', $id)->count();
        if ($total > 0) {
            return redirect()->back()->with('error', 'This car has booking. So, you can not delete this car!');
        }

        $car = Car::where('id', $id)->first();
        $car->delete();
        return redirect()->route('admin_car_index')->with('success', 'Car Deleted successfully!');
    }
}
