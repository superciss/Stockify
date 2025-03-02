<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::post('/login/auth', [LoginController::class, 'login'])->name('login');

Route::get('/dashboard/index', function() {
    return view('dashboard.index');
});