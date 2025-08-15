<?php

use App\Http\Controllers\Api\TareaController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Autenticación
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
});

// Tareas
Route::prefix('tareas')->group(function () {
    Route::get('/', [TareaController::class, 'index']);
    Route::get('/{tarea}', [TareaController::class, 'show']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', [TareaController::class, 'store']);
        Route::put('/{tarea}', [TareaController::class, 'update']);
        Route::delete('/{tarea}', [TareaController::class, 'destroy']);
    });
});