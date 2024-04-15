<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\WeatherController;

Route::get('/', [WeatherController::class, 'index']);
