<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/fumetti', function () {
    return view('fumetti.index');
})->name('fumetti');

Route::get('/chi-siamo', function () {
    return view('about');
})->name('chi-siamo');

Route::get('/contatti', function () {
    return view('contact');
})->name('contatti');
