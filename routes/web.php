<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PackageController;

Route::resource('packages', PackageController::class);


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

Route::get('/Manegpacks', [PackageController::class , 'index'])->name('Manegpacks');

// Appointment
Route::get('/Appoinment', function () {
    $packages = App\Models\Package::all(); // Fetch all packages from the database
    return view('main_components.appointment.appointment', compact('packages')); // Pass the packages to the view
});

// Custom Login Page View
Route::get('/Log', function () {
    return view('main_components.login');
});

// Custom Register Page View
Route::get('/Register', function () {
    return view('main_components.register');
});

// Request Package (Route to show package details)
Route::get('request-package/{id}', [PackageController::class, 'show'])->name('request-package');


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
Route::get('/admin', function () {
    return view('admin.admin_dash');
})->middleware('auth');
Route::get('/request-package/{id}', [PackageController::class, 'show'])->name('request-package');
Route::get('/packages/{id}', [PackageController::class, 'show'])->name('packages.show');


Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('packages', PackageController::class);
});
