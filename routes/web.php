<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\vehicleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RazorpayController;


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

Route::post('/search', [SearchController::class, 'search']);

//for renter
Route::group(['middleware' => ['auth', 'role:renter']], function () {
	Route::get('/renter', function () {
		return view('renter.renter');
	})->name('renter');

	Route::get('/vehicle-data', [vehicleController::class, 'create'])->name('vehicle-data');
	Route::post('/vehicle-data', [vehicleController::class, 'store'])->name('vehicle-data');
});

require __DIR__ . '/auth.php';

// Route::get('/vehicleFullDetails',function(){
// 	return view('vehicleFullDetails');
// });


Route::group(['middleware' => ['web']], function () {
	//routes here
	Route::get('vehicleFullDetails/{vehicle_id}/{fromdate}/{todate}', [vehicleController::class, 'details'])->name('vehicleFullDetails/?{vehicle_id}&{fromdate}&{todate}');//{vehicle_id}/{fromdate}/{todate}
});

//booking
Route::group(['middleware' => ['auth', 'role:customer']], function () {
	Route::get('/book/{vehicle_id}/{fromdate}/{todate}', [BookingController::class, 'create'])->name('create');
	Route::get('/book/{id}', [BookingController::class, 'getAddress'])->name('getAddress');
});

//payment
Route::get('/payment', [RazorpayController::class, 'payment'])->name('payment');
Route::post('/payment', [RazorpayController::class, 'initiate'])->name('initiate');
Route::post('/payment-complete', [RazorpayController::class, 'complete'])->name('complete');
