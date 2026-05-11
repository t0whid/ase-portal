<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebgilityExportController;

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


Route::get('/webgility/export', [WebgilityExportController::class, 'index'])
    ->name('webgility.export.index');

Route::post('/webgility/export/login', [WebgilityExportController::class, 'login'])
    ->name('webgility.export.login');

Route::post('/webgility/export/logout', [WebgilityExportController::class, 'logout'])
    ->name('webgility.export.logout');

Route::get('/webgility/export/orders/{order}/download', [WebgilityExportController::class, 'downloadCsv'])
    ->name('webgility.export.download');
