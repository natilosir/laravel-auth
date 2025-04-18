<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// پردازش لاگین
Route::post('/login', [AuthController::class, 'login']);

// صفحه داشبورد (فقط برای کاربران لاگین‌شده)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// خروج کاربر
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
