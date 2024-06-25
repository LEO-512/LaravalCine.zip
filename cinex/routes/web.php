<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SeatController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('show');
});

Route::get('/', function () {
    return view('seats');
});

Route::get('/movies', function () {
    return view('movies.index');
});

Route::get('/movies/show', function () {
    return view('movies.show');
});

Route::get('/showtimes', function () {
    return view('showtimes.index');
});

Route::get('/showtimes/show', function () {
    return view('showtimes.show');
});

Route::post('/seats/update', [SeatController::class, 'update'])->name('seats.update');

Route::get('/showtimes/{showtimeId}/seats', [SeatController::class, 'show'])->name('show.seats');

Route::post('/bookings/{bookingId}/seats/update', [BookingController::class, 'updateSeats'])->name('bookings.update');
