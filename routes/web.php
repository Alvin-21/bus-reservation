<?php

use App\Http\Controllers\AvailableBusController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use App\Models\AvailableBus;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Symfony\Component\Routing\RouteCompiler;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('contactus', function () {
    return view('contactus');
});

Route::get('availability', [AvailableBusController::class, 'displayAvailability'])->name('availability');

Route::get('bookings', function () {
    return view('bookings');
})->name('bookings');

Route::get('buses', [BusController::class, 'display'])->name('buses');

Route::get('routes', [RouteController::class, 'displayRoutes'])->name('routes');

Route::get('report', function () {
    return view('report');
})->name('report');

Route::get('seats', function () {
    return view('seats');
})->name('seats');

Route::get('book-bus', [RouteController::class, 'index'])->name('book-bus');

Route::get('bus-result', [AvailableBusController::class, 'display'])->name('bus-result');

Route::post('bus-result', [AvailableBusController::class, 'display'])->name('bus-result');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

require __DIR__.'/auth.php';
