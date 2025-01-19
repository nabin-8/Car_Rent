<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::guard('web')->user();
        $bookings = Booking::where('user_id', $user->id)->get();
        return view('user.dashboard', compact('bookings'));
    }

    public function user_edit()
    {
        return view('user.edit');
    }

    public function user_edit_submit(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required|numeric|digits:10',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zip' => 'required|numeric',
                'password' => 'nullable|min:6',
                'confirm_password' => 'nullable|same:password',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );

        $user = User::where('id', Auth::guard('web')->user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->zip = $request->zip;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            $user->photo = $name;
        }
        $user->save();

        return redirect()->route('user_edit')->with('success', 'User information updated successfully!');
    }
}
