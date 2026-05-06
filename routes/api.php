<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SavedTemplateController;
use App\Http\Controllers\Api\SavedAddressController;
use App\Http\Controllers\Api\DraftController;
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

    Route::get('/addresses', [SavedAddressController::class, 'index']);
    Route::post('/addresses', [SavedAddressController::class, 'store']);
    Route::put('/addresses/{address}', [SavedAddressController::class, 'update']);
    Route::delete('/addresses/{address}', [SavedAddressController::class, 'destroy']);
    
    Route::get('/drafts', [DraftController::class, 'index']);
    Route::post('/drafts', [DraftController::class, 'store']);
    Route::get('/drafts/{draft}', [DraftController::class, 'show']);
    Route::delete('/drafts/{draft}', [DraftController::class, 'destroy']);
    Route::delete('/drafts', [DraftController::class, 'clear']);
});
