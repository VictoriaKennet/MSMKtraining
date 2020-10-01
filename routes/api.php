<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('certificate-data', 'DataController@pdfDataCertificate');
Route::get('record-data', 'DataController@pdfDataRecord');

Route::get('wps/{id}', 'DataController@wpsId');
Route::post('wps', 'DataController@postWPS');
Route::post('wps/{id}', 'DataController@editWPSId');
Route::post('del-wps/{id}', 'DataController@delWPSId');

Route::post('element', 'DataController@postElement');
Route::post('element/{id}', 'DataController@updateElement');
Route::post('del-element/{id}', 'DataController@deleteElement');

Route::post('client', 'ClientController@saveClient');
Route::post('client/{id}', 'ClientController@updateClient');
Route::post('del-client/{id}', 'ClientController@delClient');
Route::get('clients', 'ClientController@getClients');
Route::get('client/{id}', 'ClientController@getClientId');

Route::post('img', 'PdfController@img');
