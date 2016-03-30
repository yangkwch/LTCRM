<?php

use App\ContractModel;
use Illuminate\Http\Request;

/**
 * Display All Tasks
 */

Route::get('/', 'ContractController@dashboard');
Route::get('/contractquery', 'ContractController@query');
Route::get('/contractcreate', 'ContractController@create');
Route::get('/contractedit', 'ContractController@edit');

