<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('theme::index');
})->name('home');

Route::get('/marketing', function () {
    return view('index');
})->name('marketing');
