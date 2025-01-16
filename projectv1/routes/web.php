<?php

use App\Http\Controllers\Front\FrontFrontendController;
use Illuminate\Support\Facades\Route;

// Main routes
Route::get('/', [FrontFrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontFrontendController::class, 'about'])->name('about');
Route::get('/client', [FrontFrontendController::class, 'client'])->name('client');
Route::get('/vehicles', [FrontFrontendController::class, 'vehicles'])->name('vehicles');
Route::get('/services', [FrontFrontendController::class, 'services'])->name('services');
Route::get('/contact', [FrontFrontendController::class, 'contact'])->name('contact');
