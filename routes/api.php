<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::put('/projects/{id}', [ProjectController::class, 'update']);
Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

Route::get('/tasks', [ProjectController::class, 'index']);
Route::post('/tasks', [ProjectController::class, 'store']);
Route::get('/tasks/{id}', [ProjectController::class, 'show']);
Route::put('/tasks/{id}', [ProjectController::class, 'update']);
Route::delete('/tasks/{id}', [ProjectController::class, 'destroy']);
