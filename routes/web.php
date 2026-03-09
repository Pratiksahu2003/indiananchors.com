<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/book', [BookingController::class, 'submit'])
    ->middleware('throttle:5,1')
    ->name('book.submit');
