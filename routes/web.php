<?php

use Illuminate\Support\Facades\Route;

Route::post('pdf', 'PdfController@createPDF');
Route::post('welding-procedure', 'PdfController@createPDFWeldingProcedure');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/{any?}', function () {
        return view('index');
    })->where('any', '.*');
});
