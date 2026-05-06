<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/design-portal');
});

Route::get('/design-portal', function () {
    return view('portal');
});