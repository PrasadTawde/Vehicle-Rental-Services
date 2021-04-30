<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Auth;

class orderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user_id=$user->id;
        //return view('orders',compact('user'));
        
        $Orders = \DB::table('select * from has_rented where ([customer_id=$user_id])');
        return view('orders',['Orders'=>$Orders]);
        //$Orders = DB::table(has_rented)->where('user_id',auth()->id());
    }
}