<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\CustomerModel;

class CustomerController extends Controller
{
    //



	public function query()
	{

		$customers = CustomerModel::all();
		
		return view('customer.query', ['customers' => $customers]);
	}

	public function querycommit(Request $request)
	{
		if($request->input('customername'))
		{
			$customername = $request->input('customername');
			
	    	$customers = CustomerModel::where('customername','like', '%'.$customername.'%')->get();
	    }
	    else
	    	$customers = CustomerModel::all();

	
		return view('customer.querycommit', ['customers' => $customers]);
	}	
}
