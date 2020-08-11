<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::group(['middleware' => 'auth'], function () {
    Route::get('/{any?}', function () {
        return view('index');
    });
// });
