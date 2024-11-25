<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthCheckController;
use App\Http\Controllers\Projects;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/health', [HealthCheckController::class, 'check']);

// Projects CRUD routes
Route::get('/projects', [Projects::class, 'index']);
Route::post('/projects', [Projects::class, 'store']);
Route::get('/projects/{project}', [Projects::class, 'show']);
Route::put('/projects/{project}', [Projects::class, 'update']);
Route::delete('/projects/{project}', [Projects::class, 'destroy']);
