<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tema;
use App\User;


class ForoController extends Controller
{


	public function __construct(){
        $this->middleware('auth');
    }
	
	
        public function index()
    {

    	$temas = Tema::paginate(10);
    	return view('foro.index')->with(compact('temas')); // listado
    }


}
