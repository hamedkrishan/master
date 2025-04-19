<?php

use Illuminate\Support\Facades\Route;





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

Route::get('/Log', function () {
    return view('main_components.login');
});

Route::get('/Our Team', function () {
    return view('main_components.OurTeam.ourteam');
});

Route::get('/Appoinment', function () {
    return view('main_components.appointment.appointment');
});

Route::get('/Register', function () {
    return view('main_components.register');
});

