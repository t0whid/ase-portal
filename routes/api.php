<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SavedTemplateController;
use App\Http\Controllers\Api\SavedAddressController;
use App\Http\Controllers\Api\DraftController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\Api\PaymentController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/send-quote', [EmailController::class, 'sendQuote']);
Route::post('/stripe/webhook', [PaymentController::class, 'webhook']);

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

    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);
    Route::get('/orders/{order}', [OrderController::class, 'show']);

    Route::post('/payments/create-checkout-session', [PaymentController::class, 'createCheckoutSession']);
});
