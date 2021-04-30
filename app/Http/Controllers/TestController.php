<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;

class TestController extends Controller
{

    public function welcome()
    {

        $especialidades = Especialidad::all();
        return view("/welcome",compact("especialidades"));

    }

}
