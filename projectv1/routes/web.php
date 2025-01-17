<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Front\FrontFrontendController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// Main routes
Route::get('/', [FrontFrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontFrontendController::class, 'about'])->name('about');
Route::get('/client', [FrontFrontendController::class, 'client'])->name('client');
Route::get('/vehicles', [FrontFrontendController::class, 'vehicles'])->name('vehicles');
Route::get('/services', [FrontFrontendController::class, 'services'])->name('services');
Route::get('/contact', [FrontFrontendController::class, 'contact'])->name('contact');


// User
Route::middleware('auth')
    ->prefix('user')
    ->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user_dashboard');
});

// Admin
Route::middleware('admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin_dashboard');
});

// Admin Auth
// Admin Auth
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('admin_login');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin_logout');
    Route::get('/forget-password', [AdminAuthController::class, 'forget_password'])->name('admin_forget_password');
    Route::get('/reset-password/{token}/{email}', [AdminAuthController::class, 'reset_password'])->name('admin_reset_password');

    Route::post('/forget-password', [AdminAuthController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
    Route::post('/login', [AdminAuthController::class, 'login_submit'])->name('admin_login_submit');
    Route::post('/reset-password/{token}/{email}', [AdminAuthController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
});