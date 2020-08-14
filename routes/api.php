<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('wps', 'DataController@wps');
Route::get('transfer-mode', 'DataController@transferMode');
Route::get('process', 'DataController@process');
Route::get('type-polarity', 'DataController@typePolarity');
Route::get('parent-material-group', 'DataController@parentMaterialGroup');
Route::get('product-type', 'DataController@productType');
Route::get('type-weld', 'DataController@typeWeld');
Route::get('filler-material-group', 'DataController@fillerMaterialGroup');
Route::get('filler-material-designation', 'DataController@fillerMaterialDesignation');
Route::get('shielding-gas', 'DataController@shieldingGas');
Route::get('welding-position', 'DataController@weldingPosition');
Route::get('welding-details', 'DataController@weldingDetails');
