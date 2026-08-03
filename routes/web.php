<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/fumetti', function () {
    return view('fumetti.index');
})->name('fumetti');
