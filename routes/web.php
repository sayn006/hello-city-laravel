<?php

use Illuminate\Support\Facades\Route;



// Routes
Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');

// Avant
Route::get('/help', function () {
    return view('pages.help');
})->name('help');
