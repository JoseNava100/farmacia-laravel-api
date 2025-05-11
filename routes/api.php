<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    
    Route::apiResource('categorias', CategoriaController::class);
    // Route::apiResource('productos', ProductoController::class);
    // Route::apiResource('ventas', VentaController::class);
});