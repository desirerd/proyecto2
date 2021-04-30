<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class SearchDoctorController extends Controller
{
    public function show(Request $request)
    {	

    	$id_doct = $request->input('doctor');
    	$doctore = Doctor::where('id', 'like', $id_doct)->first();
    	

    	return view('busqueda.show')->with(compact('doctore'));
    }

    public function data()
    {
    	$products = Product::pluck('name');
    	return $products;
    }
}
