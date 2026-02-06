<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('cars', CarController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('rentals', RentalController::class);
    Route::resource('users', UserController::class)->only(['index','show','edit','update']);
});

// Se você usa /home, mantenha (opcional)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
