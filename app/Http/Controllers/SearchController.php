<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	$formData = $request->all();
        $location = $request->input('location');
    	$vehicles = DB::table('vehicles')->where('vehicle_location',$location)->get();
    	
        $location_states = DB::table('stations')->select('station_state')->groupBy('station_state')->get();

        // dd(['formData'=>$formData,'vehicles' => $vehicles, 'location_states' => $location_states]);
    	return view('/search', ['formData'=>$formData,'vehicles' => $vehicles, 'location_states' => $location_states]);
    }
}
