<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/adatkezeles', function () {
    return view('privacy');
})->name('privacy');
