<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Home
Route::get('/', function () {
    return view('main_components.home.home');
});

// About
Route::get('/about', function () {
    return view('main_components.about-us.about');
});

// Contact
Route::get('/Contact', function () {
    return view('main_components.contact.contact');
});

// Service
Route::get('/Service', function () {
    return view('main_components.service.service');
});

// Our Team
Route::get('/Our Team', function () {
    return view('main_components.OurTeam.ourteam');
});

// Appointment
Route::get('/Appoinment', function () {
    return view('main_components.appointment.appointment');
});

// Custom Login Page View
Route::get('/Log', function () {
    return view('main_components.login');
});

// Custom Register Page View
Route::get('/Register', function () {
    return view('main_components.register');
});

// Auth Controllers
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Super Admin Dashboard
Route::get('/admin/admin_dash', function () {
    return view('admin.admin_dash');
})->middleware('auth');

// Admin Dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard'); // create this view if needed
})->middleware('auth');
