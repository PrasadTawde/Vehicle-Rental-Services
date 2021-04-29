<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vehicle;

class BookingController extends Controller
{
    function create($vehicle_id,$fromdate,$todate){
    $vDetails = new Vehicle;
    $vDetails = DB::table('vehicles')->where('vehicle_id',$vehicle_id)->get();
    $stations = DB::table('stations')->get();
       return view('/book',['vDetails'=>$vDetails ,'fromdate'=>$fromdate,'todate'=>$todate, 'stations'=>$stations]);
    }

    function getAddress($id)
    {
    	$data = DB::table('stations')->where('station_id', $id)->get();
    	\Log::info($data);
        return response()->json(['data' => $data]);
    }
}
