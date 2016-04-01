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
Route::post('/contractquerycommit', 'ContractController@querycommit');

Route::get('/customerquery', 'CustomerController@query');
Route::post('/customerquerycommit', 'CustomerController@querycommit');