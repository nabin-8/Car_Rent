<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontAuthController extends Controller
{
    public function login()
    {
        return view('front.auth.login');
    }

    public function login_submit(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->route('login')->with('error', 'The email address is not registered! Please try again.')->withInput();
        }

        if (!Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect()->route('login')->with('error', 'The password you entered is incorrect! Please try again.')->withInput();
        }

        return redirect()->route('user_dashboard')->with('success', 'Login is Successful!');
    }
    
    public function registration()
    {
        return view('front.auth.registration');
    }

    public function registration_submit(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'address' => 'required',
                'phone' => 'required|numeric|digits:10',
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password',
            ]
        );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'You have been registered successfully! Please login now.');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home')->with('success', 'Logout is Successful!');
    }
}
