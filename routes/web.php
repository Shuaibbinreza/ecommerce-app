<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Products (public)
Route::get('/products', function () {
    return view('products');
});

// Special Products - Authentication checked at route level using 'auth' middleware
Route::get('/special-products', [AuthController::class, 'specialProducts'])->middleware('auth');
