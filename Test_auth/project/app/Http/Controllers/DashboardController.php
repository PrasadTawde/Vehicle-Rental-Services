<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

	public function index()
	{
		if(Auth::user()->hasRole('customer')){
    		return view('customerDashboard');
    }elseif (Auth::user()->hasRole('renter')) {
    	return view('renterDashboard');
    }elseif (Auth::user()->hasRole('admin')) {
    	return view('dashboard');
    }
	}
   
   public function myprofile()
   {
   	 return view('myprofile');

   }

   public function rentCar()
   {
     return view('rentCar');

   }
}
