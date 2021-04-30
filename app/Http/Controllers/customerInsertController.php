<?php

namespace App\Http\Controllers;
use App\customerInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class customerInsertController extends Controller
{
	public function insert(){
		return view('profile.customerProfile');
	}


	public function create(Request $request){

    	// return $request->input();


		$request->validate([
			'customer_fname'=>'required',
			'customer_lname'=>'required',
			'customer_contact_no'=>'required',
			'customer_country'=>'required',
			'customer_state'=>'required',
			'customer_driving_licence_no'=>'required'
		]);

		$query=DB::table('customers')->insert([
			'customer_fname'=>$request->input('customer_fname'),
			'customer_lname'=>$request->input('customer_lname'),
			'customer_contact_no'=>$request->input('customer_contact_no'),

			'customer_country'=>$request->input('customer_country'),

			'customer_state'=>$request->input('customer_state'),

			'customer_driving_licence_no'=>$request->input('customer_driving_licence_no')


		]);

		if($query){
			return back()->with("success","data inserted");
		}else{
				return back()->with("fail","data not inserted");

		}

	}
}
