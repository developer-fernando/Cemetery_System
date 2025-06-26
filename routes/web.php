<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
// Redireciona para login
Route::get('/', function () {
    return redirect()->route('login');
});

// Autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> adaef6a94d41c10e2d158db932439fc6c168ff34
