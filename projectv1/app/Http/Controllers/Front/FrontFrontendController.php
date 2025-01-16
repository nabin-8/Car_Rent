<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontFrontendController extends Controller
{
    public function home()
    {
        return view('front.home');
    }
}
