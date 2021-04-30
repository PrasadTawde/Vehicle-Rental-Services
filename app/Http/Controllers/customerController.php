<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\DB;

use Auth;


class customerController extends Controller
{
    // function profile(){
    //  $data= customer::all();
    //  return view('profile.customerProfile',['customers'=>$data]);
    // }

    function profile(){

        $user = Auth::user();
        $user_id = $user->id;

        $customerData = DB::table('customers')->where('customer_id',$user_id)->get();
        return view('profile.customerProfile',['customers'=>$customerData]);
    }



    //update customer data
    function showData($customer_id){

        $data= DB::select('select * from customers where customer_id = ?',[$customer_id]);
        return view('edit',['customers'=>$data]);
                // return DB::select('select * from customers where customer_id = ?',[$customer_id]);


    }
    function updateData(Request $request,$customer_id){

        $customer_id = $request->input('customer_id');

        $customer_fname = $request->input('customer_fname');
        $customer_lname = $request->input('customer_lname');
        $customer_contact_no = $request->input('customer_contact_no');
        $customer_country = $request->input('customer_country');
        $customer_state = $request->input('customer_state');
        $customer_driving_licence_no = $request->input('customer_driving_licence_no');

        DB::update('update customers set customer_fname = ?,customer_lname=?,customer_contact_no=?,customer_country=?,customer_state=?,customer_driving_licence_no=? where customer_id = ?',[$customer_fname,$customer_lname,$customer_contact_no,$customer_country,$customer_state,$customer_driving_licence_no,$customer_id]);

        return redirect('/profile');
        // return redirect()->route('profile',[$customer_id]);


    }
}


