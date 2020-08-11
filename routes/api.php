<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('wps', 'DataController@wps');
Route::get('transfer-mode', 'DataController@transferMode');
Route::get('process', 'DataController@process');
Route::get('type-polarity', 'DataController@typePolarity');
Route::get('shielding-gas', 'DataController@shieldingGas');
