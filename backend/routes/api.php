<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Projects;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Basic route to fetch all projects
Route::get('/projects', [Projects::class, 'index']);

// Route to create a new project
Route::post('/projects', [Projects::class, 'store']);

// Route to fetch a specific project by ID
Route::get('/projects/{project}', [Projects::class, 'show']);

// Route to update an existing project
Route::put('/projects/{project}', [Projects::class, 'update']);

// Route to delete a project
Route::delete('/projects/{project}', [Projects::class, 'destroy']);

// Example: Route to fetch authenticated user details (optional)
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
