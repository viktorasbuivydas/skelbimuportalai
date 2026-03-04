<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function (): void {
    Route::get('/prisijungti', [LoginController::class, 'create'])->name('login');
    Route::post('/prisijungti', [LoginController::class, 'store']);

    Route::get('/registracija', [RegisterController::class, 'create'])->name('register');
    Route::post('/registracija', [RegisterController::class, 'store']);
});

Route::middleware('auth')->group(function (): void {
    Route::post('/atsijungti', [LoginController::class, 'destroy'])->name('logout');
});
