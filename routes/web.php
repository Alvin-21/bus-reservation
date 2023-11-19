<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contactus', function () {
    return view('contactus');
});

Route::get('signUp', function () {
    return view('signUp');
});

Route::get('signIn', function () {
    return view('signIn');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('availability', function () {
    return view('availability');
});

Route::get('bookings', function () {
    return view('bookings');
});

Route::get('buses', function () {
    return view('buses');
});

Route::get('routes', function () {
    return view('routes');
});

Route::get('report', function () {
    return view('report');
});

Route::get('seats', function () {
    return view('seats');
});
