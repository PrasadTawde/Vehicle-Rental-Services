<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//Auth route for both
Route::group(['middleware'=>['auth']],function(){
	Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});


//for customers
Route::group(['middleware'=>['auth','role:customer']],function(){
	Route::get('/dashboard/myprofile','App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

//for renter
Route::group(['middleware'=>['auth','role:renter']],function(){
	Route::get('/dashboard/rentCar','App\Http\Controllers\DashboardController@rentCar')->name('dashboard.rentCar');
});

require __DIR__.'/auth.php';
