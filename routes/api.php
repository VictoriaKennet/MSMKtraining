<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('pdf-data', 'DataController@pdfData');

Route::post('added', 'DataController@added');
Route::post('added-wps', 'DataController@addedWPS');

Route::post('img', 'PdfController@img');
