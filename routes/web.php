<?php

use App\Http\Controllers\ParkingController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [ParkingController::class, 'index'])->name('home');
Route::post('/park', [ParkingController::class, 'store'])->name('park');

Route::get('/help', function () {
    return Inertia::render('Help/Index');
})->name('help');
