<?php

use App\Http\Controllers\Front\FrontFrontendController;
use Illuminate\Support\Facades\Route;

// Main routes
Route::get('/', [FrontFrontendController::class, 'home'])->name('home');
