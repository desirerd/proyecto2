<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Especialidad;
use File;

class EspecialidadController extends Controller
{
    public function index()
    {
    	$especialidades = Especialidad::orderBy('nombre')->paginate(10);
    	return view('admin.especialidades.index')->with(compact('especialidades')); // listado
    }

    public function create()
    {
    	return view('admin.especialidades.create'); // formulario de registro
    }

    public function store(Request $request)
    {
        $this->validate($request, Especialidad::$rules, Especialidad::$messages);

        $especialidades = Especialidad::create($request->only('nombre'));

       
        return redirect('/admin/especialidades');
    }

    public function edit(Especialidad $especialidad)
    {
        return view('admin.especialidades.edit')->with(compact('especialidad')); // form de edición
    }

    public function update(Request $request, Especialidad $especialidad)
    {
        $this->validate($request, Especialidad::$rules, Especialidad::$messages);

        $especialidad->update($request->only('nombre'));

             

        return redirect('/admin/especialidades');
    }

    public function destroy(Especialidad $especialidad)
    {
        $especialidad->delete(); // DELETE
        return back();
    }
    
}

	

