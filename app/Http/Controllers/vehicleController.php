<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\Vehicle;

class vehicleController extends Controller
{
    function create()
    {
        return view('renter.vehicleDetails');
    }

    function store(Request $req)
    {
        //print_r($req->input());
        $vehicle=new Vehicle;
        $vehicle->vehicle_no=$req->vNo;
        $vehicle->vehicle_type=$req->vType;
        $vehicle->vehicle_model=$req->vModel;
        $vehicle->vehicle_fuel_type=$req->fType;
        $vehicle->vehicle_min_deposite=$req->dAmount;
        $vehicle->vehicle_status=$req->vStatus;
        $vehicle->vehicle_state=$req->state;
        $vehicle->vehicle_location=$req->location;
        $vehicle->vehicle_img=" ";
        $vehicle->save();

        return redirect(RouteServiceProvider::RENTER);
    }

    function details($vehicle_id,$fromdate,$todate){
    //    $vDetails = Vehicle:: where('vehicles.vehicle_id',$vehicle_id)->first();
    // $vDetails = Vehicle:: find($vehicle_id);
    // $vDetails = DB::select('select * from vehicles where vehicle_id = '$vehicle_id);
    $vDetails=new Vehicle;
    $vDetails = DB::table('vehicles')->where('vehicle_id',$vehicle_id)->get();
       return view('/vehicleFullDetails',['vDetails'=>$vDetails ,'fromdate'=>$fromdate,'todate'=>$todate]);
    }
}
