<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/form', [HomeController::class, 'form']);

Route::get('/welcome', [HomeController::class, 'welcome']);

Route::get('/data', [HomeController::class, 'data']);



