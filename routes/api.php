<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExternalWeatherController;
use App\Http\Controllers\WeatherHistoryController;
use App\Http\Controllers\WeatherFavoritesController;

Route::controller(WeatherHistoryController::class)->group(function () {
    Route::get('/history', 'index');
    Route::post('/history', 'store'); 
});

Route::controller(WeatherFavoritesController::class)->group(function () {
    Route::get('/favorites', 'index');
    Route::post('/favorites', 'store'); 
});

Route::controller(ExternalWeatherController::class)->group(function () {
    Route::get('/weather/{local}', 'weather');
});