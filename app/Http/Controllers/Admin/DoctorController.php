<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Especialidad;
use App\Doctor;


class DoctorController extends Controller
{
    public function index()
    {
    	$doctores = Doctor::paginate(10);
    	return view('admin.doctores.index')->with(compact('doctores')); // listado
    }

    public function create()
    {
        $especialidades = Especialidad::orderBy('nombre')->get();
    	return view('admin.doctores.create')->with(compact('especialidades')); // formulario de registro
    }

    public function store(Request $request)
    {
        // validar
        $messages = [
            
            'description.required' => 'La descripción es un campo obligatorio.',
            'nombre.required' => 'El nombre es un campo obligatorio.',
            'apellidos.required' => 'El apellido es un campo obligatorio.',
            'description.max' => 'La descripción solo admite hasta 500 caracteres.',
            
        ];
        $rules = [
            
            'description' => 'required|max:500',
            
        ];
        $this->validate($request, $rules, $messages);

    	// registrar el nuevo producto en la bd
        $doctor = new Doctor();
        $doctor->nombre = $request->input('nombre');
        $doctor->apellidos = $request->input('apellidos');
        $doctor->description = $request->input('description');
        $doctor->especialidad_id = $request->especialidad_id == 0 ? null : $request->especialidad_id;

        // Subir la imagen
		$image_path = $request->file('image_path');
		if($image_path){
			// Poner nombre unico
			$image_path_name = time().$image_path->getClientOriginalName();
			
			// Guardar en la carpeta storage (storage/app/users)
			\Storage::disk('imgsdoctores')->put($image_path_name, \File::get($image_path));
			
			// Seteo el nombre de la imagen en el objeto
			$doctor->image = $image_path_name;
		}
		
        $doctor->save(); // INSERT

        return redirect('/admin/doctores');
    }

   

    public function edit($id)
    {
        $especialidades = Especialidad::orderBy('nombre')->get();
        $doctor = Doctor::find($id);
        return view('admin.doctores.edit')->with(compact('doctor', 'especialidades')); // form de edición
    }

    public function update(Request $request, $id)
    {
        $messages = [
            
            
        ];
        $rules = [
            
           
 
        ];
        $this->validate($request, $rules, $messages);
        // dd($request->all());
        $doctor= Doctor::find($id);
        $doctor->nombre = $request->input('nombre');
        $doctor->apellidos = $request->input('apellidos');
        $doctor->description = $request->input('description');
        $doctor->especialidad_id = $request->especialidad_id == 0 ? null : $request->especialidad_id;

        // Subir la imagen
		$image_path = $request->file('image_path');
		if($image_path){
			// Poner nombre unico
			$image_path_name = time().$image_path->getClientOriginalName();
			
			// Guardar en la carpeta storage (storage/app/users)
			\Storage::disk('imgsdoctores')->put($image_path_name, \File::get($image_path));
			// Seteo el nombre de la imagen en el objeto
			$doctor->image = $image_path_name;
		}
		
		// Ejecutar consulta y cambios en la base de datos
		$doctor->update();

        return redirect('/admin/doctores');


    }

    public function destroy($id)
    {
        
        $doctor = Doctor::find($id);
        $doctor->delete(); // DELETE

        return back();
    }
}


    