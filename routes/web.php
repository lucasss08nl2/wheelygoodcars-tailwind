<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/sell', [CarController::class, 'sell']);
Route::get('/dashboard', [CarController::class, 'dashboard']);

Route::post('/cars', [CarController::class, 'store']);
Route::delete('/cars/{id}', [CarController::class, 'destroy']);