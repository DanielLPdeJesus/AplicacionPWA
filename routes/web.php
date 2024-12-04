<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/offline', function () {
    return view('vendor.laravelpwa.offline');
});
