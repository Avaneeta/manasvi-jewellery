<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;



// Front End Links
Route::get('/', [BaseController::class, 'index']);
Route::get('/about-us', [BaseController::class, 'about_as']);