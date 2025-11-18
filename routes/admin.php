<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::get('/show', [LocationController::class, 'show']);
Route::get('/test', [LocationController::class, 'test']);