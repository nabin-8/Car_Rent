<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\City;
use Illuminate\Http\Request;

class AdminCityController extends Controller
{
    public function index()
    {
        $cities = City::get();
        return view('admin.city.index', compact('cities'));
    }

    public function create()
    {
        return view('admin.city.create');
    }

    public function create_submit(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
            ],
        );

        $city = new City();
        $city->name = $request->name;
        $city->save();

        return redirect()->route('admin_city_index')->with('success', 'City is created successfully!');
    }

    public function edit($id)
    {
        $city = City::where('id', $id)->first();
        return view('admin.city.edit', compact('city'));
    }

    public function edit_submit(Request $request, $id)
    {
        $city = City::where('id', $id)->first();
        $request->validate(
            [
                'name' => 'required',
            ],
        );
        $city->name = $request->name;
        $city->save();

        return redirect()->route('admin_city_index')->with('success', 'City updated successfully!');
    }
    
    public function delete($id)
    {
        $total = Booking::where('city_id', $id)->count();
        if ($total > 0) {
            return redirect()->back()->with('error', 'This city has booking. So, you can not delete this city!');
        }

        $city = City::where('id', $id)->first();
        $city->delete();
        return redirect()->route('admin_city_index')->with('success', 'City Deleted successfully!');
    }
}
