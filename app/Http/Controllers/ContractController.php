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

	public function querycommit(Request $request)
	{
		if($request->input('contractnumber'))
		{
			$contractnumber = $request->input('contractnumber');
			$contractname = $request->input('contractname');
			
	    	$contracts = ContractModel::where('contractname','like', '%'.$contractname.'%')->where(function($query){$query->where('contractnumber','like', '%'.$contractnumber.'%');})->get();
	    }
	    else
	    	$contracts = ContractModel::all();

	
		return view('contract.querycommit', ['contracts' => $contracts]);
	}

	public function create(Request $request)
	{

		$contracts = ContractModel::all();
		
		return view('contract.create', ['contracts' => $contracts]);
	}

	public function edit(Request $request)
	{

		$contracts = ContractModel::all();
		
		return view('contract.edit', ['contracts' => $contracts]);
	}
}
