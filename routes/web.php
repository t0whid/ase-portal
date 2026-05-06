<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/design-portal');
});

Route::get('/design-portal', function () {
    return view('portal');
});

Route::get('/payment/success', function () {
    return view('payments.success');
})->name('payment.success');

Route::get('/payment/cancel', function () {
    return view('payments.cancel');
})->name('payment.cancel');