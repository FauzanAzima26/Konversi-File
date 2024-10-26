<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/Pdf-to-Word', function () {
    return view('frontend.files.Pdf-to-Word');
})->name('Pdf-to-Word');