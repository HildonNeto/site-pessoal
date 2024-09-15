<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/curriculum', [SiteController::class, 'curriculum']);
