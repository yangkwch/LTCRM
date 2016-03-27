<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ContractModel;

class ContractController extends Controller
{
    //
 	public function store()
	{   
		$contract = new ContractModel();
		$contract->title = Input::get('contractnumber'); 
		$contract->text = Input::get('contractname');
		$contract->save();
	}

	public function show()
	{

		$contracts = ContractModel::all();
		
		return view('contract.show', ['contracts' => $contracts]);
	}

}
