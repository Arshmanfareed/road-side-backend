<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\RegisterController;


// Auth::routes();

// Registration and login routes
Route::post('/api-signup', [RegisterController::class, 'apiRegister']);








