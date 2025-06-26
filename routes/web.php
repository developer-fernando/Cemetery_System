<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// Redireciona para login
Route::get('/', function () {
    return redirect()->route('login');
});

// Autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
