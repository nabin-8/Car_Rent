<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarCategory;
use Illuminate\Http\Request;

class AdminCarCategoryController extends Controller
{
    public function index()
    {
        $car_categories = CarCategory::get();
        return view('admin.car_category.index', compact('car_categories'));
    }

    public function create()
    {
        return view('admin.car_category.create');
    }

    public function create_submit(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => 'required|alpha_dash|unique:car_categories',
            ],
        );

        $car_category = new CarCategory();
        $car_category->name = $request->name;
        $car_category->slug = $request->slug;
        $car_category->save();

        return redirect()->route('admin_car_category_index')->with('success', 'Car Category is created successfully!');
    }

    public function edit($id)
    {
        $car_category = CarCategory::where('id', $id)->first();
        return view('admin.car_category.edit', compact('car_category'));
    }

    public function edit_submit(Request $request, $id)
    {
        $car_category = CarCategory::where('id', $id)->first();
        $request->validate(
            [
                'name' => 'required',
                'slug' => 'required|alpha_dash|unique:car_categories,slug,'.$car_category->id,
            ],
        );
        $car_category->name = $request->name;
        $car_category->slug = $request->slug;
        $car_category->save();

        return redirect()->route('admin_car_category_index')->with('success', 'Car Category updated successfully!');
    }
    
    public function delete($id)
    {
        $total = Car::where('car_category_id', $id)->count();
        if ($total > 0) {
            return redirect()->back()->with('error', 'This category has blogs. So, you can not delete this category!');
        }

        $car_category = CarCategory::where('id', $id)->first();
        $car_category->delete();
        return redirect()->route('admin_car_category_index')->with('success', 'Car Category Deleted successfully!');
    }
}
