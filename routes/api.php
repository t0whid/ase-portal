<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SavedTemplateController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/templates', [SavedTemplateController::class, 'index']);
    Route::post('/templates', [SavedTemplateController::class, 'store']);
    Route::get('/templates/{template}', [SavedTemplateController::class, 'show']);
    Route::delete('/templates/{template}', [SavedTemplateController::class, 'destroy']);
});
