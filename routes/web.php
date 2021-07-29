<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;



// Front End Links
Route::get('/', [BaseController::class, 'index']);
Route::get('/about', [BaseController::class, 'about']);
Route::get('/contact', [BaseController::class, 'contact']);
Route::get('/shop', [BaseController::class, 'shop']);
Route::get('/product_details', [BaseController::class, 'product_details']);
Route::get('/login', [BaseController::class, 'login']);
Route::get('/my_account', [BaseController::class, 'my_account']);
Route::get('/cart', [BaseController::class, 'cart']);
Route::get('/wishlist', [BaseController::class, 'wishlist']);
Route::get('/checkout', [BaseController::class, 'checkout']);
Route::get('/compare', [BaseController::class, 'compare']);
Route::get('/privacy', [BaseController::class, 'privacy']);
Route::get('/wishlist', [BaseController::class, 'wishlist']);
Route::get('/blog_list', [BaseController::class, 'blog_list']);
Route::get('/blog_details', [BaseController::class, 'blog_details']);