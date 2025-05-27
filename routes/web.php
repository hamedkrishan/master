<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Admin\TestController;
use App\Models\Test;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ExamRequestController;

// Admin Dashboard Route
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

        // Admin-only package & test management
        Route::resource('packages', PackageController::class);
        Route::resource('tests', TestController::class);
    });

// Exam Request Management (Admin Approval/Reject)
Route::middleware(['auth'])
    ->group(function () {
        Route::get('/exam-requests', [ExamRequestController::class, 'index'])->name('exam-requests.index');
        Route::post('/exam-requests/{id}/approve', [ExamRequestController::class, 'approve'])->name('exam-requests.approve');
        Route::post('/exam-requests/{id}/reject', [ExamRequestController::class, 'reject'])->name('exam-requests.reject');
    });

// Authenticated User Routes
Route::middleware('auth')->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::patch('/appointments/{appointment}/status', [AppointmentController::class, 'updateStatus'])->name('appointments.status');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

    // Exam Request by Users
    Route::get('/exam-request/{type}/{id}', [ExamRequestController::class, 'create'])->name('exam-request.create');
    Route::post('/exam-request', [ExamRequestController::class, 'store'])->name('exam-request.store');

    // User request history
    Route::get('/profile/requests', [ExamRequestController::class, 'userRequests'])->name('profile.requests');
});

// Public Routes
Route::get('/', function () {
    return view('main_components.home.home');
});

Route::get('/about', function () {
    return view('main_components.about-us.about');
});

Route::get('/Contact', function () {
    return view('main_components.contact.contact');
});

Route::get('/Service', function () {
    return view('main_components.service.service');
});

Route::get('/Our Team', function () {
    return view('main_components.OurTeam.ourteam');
});

Route::get('/tests', function () {
    return view('main_components.tests.tests');
});

Route::get('/Appoinment', function () {
    $packages = App\Models\Package::all();
    return view('main_components.appointment.appointment', compact('packages'));
});

Route::get('/Log', function () {
    return view('main_components.login');
});

Route::get('/Register', function () {
    return view('main_components.register');
});

// Package Routes
Route::get('/request-package/{id}', [PackageController::class, 'show'])->name('request-package');
Route::get('/packages/{id}', [PackageController::class, 'show'])->name('packages.show');
Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');

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

// Test Controller Routes
Route::get('/test', [TestController::class, 'index'])->name('test.index');
Route::get('/tests', [TestController::class, 'index'])->name('tests.index');
Route::get('/tests/{test}', [TestController::class, 'show'])->name('tests.show');

// Static Tests View
Route::get('/tests-view', function () {
    $tests = Test::all();
    return view('main_components.tests.tests', compact('tests'));
});
