<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/favorites', function () {
    return view('favorites');
})->name('favorites');

Route::get('/compare', function () {
    return view('comparator');
})->name('compare');






