<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use App\Doctor;


class PruebasController extends Controller
{


    public function index(){
        $especialidades = Especialidad::all();
        return view("citas",compact("especialidades"));

    }

    public function doctors(Request $request){
        if(isset($request->texto)){
            $doctores = Doctor::whereEspecialidad_id($request->texto)->get();
            return response()->json(
                [
                    'lista' => $doctores,
                    'success' => true
                ]
                );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
                );

        }

    }



    }
    

