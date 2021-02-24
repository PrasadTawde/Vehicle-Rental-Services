<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	$formData = $request->all();
    	return view('/search', compact('formData'));   	
    }
}
