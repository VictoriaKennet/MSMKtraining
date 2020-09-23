<?php

use Illuminate\Support\Facades\Route;

Route::post('welder-certificate', 'PdfController@welderCertificate');
Route::post('welding-record', 'PdfController@weldingRecord');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/{any?}', function () {
        return view('index');
    })->where('any', '.*');
});
