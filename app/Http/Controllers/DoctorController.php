<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function show($id)
    {
    	$doctor = Doctor::find($id);

    	return view('doctores.show')->with(compact('doctor'));

   
    }

     public function cita($id)
    {
        $doctor = Doctor::find($id);
    	return view('citas.show')->with(compact('doctor')); // formulario de cita 
    }


   /* public function descargar($nombre){
    $public_path = public_path();
    $url = $public_path.'/storage/'.$nombre;// depende de root en el archivo filesystems.php.
    //verificamos si el archivo existe y lo retornamos
    if (\Storage::exists($nombre))
    {
        return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);
*/

   /* public function getImage($filename){
        $file = Storage::disk('imgsdoctores')->get($filename);
        return new Response($file, 200);
}
*/
}





