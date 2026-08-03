<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/fumetti', function () {
    return view('fumetti.index');
})->name('fumetti');

Route::get('/il-progetto', function () {
    return view('about');
})->name('il-progetto');

Route::get('/contatti', function () {
    return view('contact');
})->name('contatti');
