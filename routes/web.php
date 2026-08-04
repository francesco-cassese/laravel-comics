<?php

use Illuminate\Support\Facades\Route;

// Percorso della home page, gli do un nome per poterlo richiamare più avanti
Route::get('/', function () {
    return view('home');
})->name('home');

// Percorso della pagina con il catalogo dei fumetti
Route::get('/fumetti', function () {
    return view('fumetti.index');
})->name('fumetti');

// Percorso della pagina del progetto
Route::get('/il-progetto', function () {
    return view('about');
})->name('il-progetto');

// Percorso della pagina dei contatti
Route::get('/contatti', function () {
    return view('contact');
})->name('contatti');
