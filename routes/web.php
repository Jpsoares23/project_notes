<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// auth routes
Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/registrationSubmit', [AuthController::class, 'registrationSubmit']);

