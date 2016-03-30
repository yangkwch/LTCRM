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

	public function dashboard()
	{

		$contracts = ContractModel::all();
		
		return view('dashboard');
	}

	public function query()
	{

		$contracts = ContractModel::all();
		
		return view('contract.query', ['contracts' => $contracts]);
	}

	public function create()
	{

		$contracts = ContractModel::all();
		
		return view('contract.create', ['contracts' => $contracts]);
	}

	public function edit()
	{

		$contracts = ContractModel::all();
		
		return view('contract.edit', ['contracts' => $contracts]);
	}
}
