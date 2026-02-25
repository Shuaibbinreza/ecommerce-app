<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Products - Open for all
Route::get('/', function () {
    return view('products');
})->name('products');

Route::get('/products', function () {
    return view('products');
})->name('products');

// Special Products - Requires authentication
Route::get('/special-products', [AuthController::class, 'specialProducts'])->middleware('auth')->name('special-products');
