<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class SearchController extends Controller
{
    public function show(Request $request)
    {	
    	$query = $request->input('especialidad');
    	$doctores = Doctor::where('especialidad_id',$query)->paginate(5);
    	
    	if ($doctores->count() == 1) {
    		$id = $doctores->first()->id;
    		return redirect("doctores/$id"); // 
    	}

    	return view('search.show')->with(compact('doctores', 'query'));


    }

    public function data()
    {
    	$doctores = Doctor::pluck('nombre');
    	return $doctores;
    }
}
