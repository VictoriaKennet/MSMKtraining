<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('pdf-data', 'DataController@pdfData');
Route::get('pdf-data/{id}', 'DataController@pdfDataId');
Route::post('pdf-data/{id}', 'DataController@editPdfDataId');
Route::delete('pdf-data/{id}', 'DataController@delPdfDataId');

Route::post('added', 'DataController@added');
Route::post('added-wps', 'DataController@addedWPS');

Route::post('img', 'PdfController@img');
