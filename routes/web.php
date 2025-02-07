<?php

use App\Http\Controllers\ParkingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ParkingController::class, 'index'])->name('home');
Route::post('/park', [ParkingController::class, 'store'])->name('park');
