<?php

use Illuminate\Support\Facades\Route;

Route::post('pdf', 'PdfController@createPDF');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/{any?}', function () {
        return view('index');
    })->where('any', '.*');
});
