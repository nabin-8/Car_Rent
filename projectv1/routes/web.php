<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminCarCategoryController;
use App\Http\Controllers\Admin\AdminCarController;
use App\Http\Controllers\Admin\AdminCityController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Front\FrontAuthController;
use App\Http\Controllers\Front\FrontBookingController;
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
Route::get('/car/{slug}', [FrontFrontendController::class, 'car'])->name('car');
// Booking
Route::get('/booking/{slug}', [FrontBookingController::class, 'booking'])->name('booking');
Route::get('/booking/submit', [FrontBookingController::class, 'booking_submit'])->name('booking.submit');

// Auth get
Route::get('/login', [FrontAuthController::class, 'login'])->name('login');
Route::get('/registration', [FrontAuthController::class, 'registration'])->name('registration');
Route::get('/logout', [FrontAuthController::class, 'logout'])->name('logout');
// Auth post
Route::post('/login-submit', [FrontAuthController::class, 'login_submit'])->name('login_submit');
Route::post('/registration-submit', [FrontAuthController::class, 'registration_submit'])->name('registration_submit');

// User
Route::middleware('auth')
    ->prefix('user')
    ->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user_dashboard');
        Route::get('/user-edit', [UserController::class, 'user_edit'])->name('user_edit');
        Route::post('/user-submit', [UserController::class, 'user_edit_submit'])->name('user_edit_submit');
});

// Admin
Route::middleware('admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin_dashboard');
        Route::get('/user', [AdminDashboardController::class, 'user'])->name('admin_user_index');

        // Car category get section
        Route::get('/car-category/index', [AdminCarCategoryController::class, 'index'])->name('admin_car_category_index');
        Route::get('/car-category/create', [AdminCarCategoryController::class, 'create'])->name('admin_car_category_create');
        Route::get('/car-category/edit/{id}', [AdminCarCategoryController::class, 'edit'])->name('admin_car_category_edit');
        Route::get('/car-category/delete/{id}', [AdminCarCategoryController::class, 'delete'])->name('admin_car_category_delete');
        // Car category post section
        Route::post('/car-category/create', [AdminCarCategoryController::class, 'create_submit'])->name('admin_car_category_create_submit');
        Route::post('/car-category/edit/{id}', [AdminCarCategoryController::class, 'edit_submit'])->name('admin_car_category_edit_submit');
        
        // City category get section
        Route::get('/city/index', [AdminCityController::class, 'index'])->name('admin_city_index');
        Route::get('/city/create', [AdminCityController::class, 'create'])->name('admin_city_create');
        Route::get('/city/edit/{id}', [AdminCityController::class, 'edit'])->name('admin_city_edit');
        Route::get('/city/delete/{id}', [AdminCityController::class, 'delete'])->name('admin_city_delete');
        // City category post section
        Route::post('/city/create', [AdminCityController::class, 'create_submit'])->name('admin_city_create_submit');
        Route::post('/city/edit/{id}', [AdminCityController::class, 'edit_submit'])->name('admin_city_edit_submit');
        
        // Car category get section
        Route::get('/car/index', [AdminCarController::class, 'index'])->name('admin_car_index');
        Route::get('/car/create', [AdminCarController::class, 'create'])->name('admin_car_create');
        Route::get('/car/edit/{id}', [AdminCarController::class, 'edit'])->name('admin_car_edit');
        Route::get('/car/delete/{id}', [AdminCarController::class, 'delete'])->name('admin_car_delete');
        // Car category post section
        Route::post('/car/create', [AdminCarController::class, 'create_submit'])->name('admin_car_create_submit');
        Route::post('/car/edit/{id}', [AdminCarController::class, 'edit_submit'])->name('admin_car_edit_submit');

        // Booking
        Route::get('/booking', [AdminDashboardController::class, 'booking'])->name('admin_booking_index');
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