<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthCheckController;
use App\Http\Controllers\Projects;
use App\Http\Controllers\Users;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/health', [HealthCheckController::class, 'check']);

// Users route
Route::get('/users', [Users::class, 'index']);
