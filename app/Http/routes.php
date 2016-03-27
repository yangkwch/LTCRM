<?php

use App\ContractModel;
use Illuminate\Http\Request;

/**
 * Display All Tasks
 */

Route::get('/', 'ContractController@show');