<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\vehicleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$location_states = DB::table('stations')->select('station_state')->groupBy('station_state')->get();
    return view('home', ['location_states' => $location_states]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/search',[SearchController::class, 'search']);


Route::view('vehicleData','renter/vehicleDetails');
Route::post('submitted',[vehicleController::class,'vDetails']);