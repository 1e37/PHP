<?php

use App\Http\Controllers\ApodController;
use Illuminate\Support\Facades\Route;

// Root entry point
Route::get('/', [ApodController::class, 'index']);
Route::get('/api/apod', [ApodController::class, 'getResponse']);
// Other routes / methods

