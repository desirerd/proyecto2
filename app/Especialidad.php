<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
   
  public static $messages = [
        'nombre.required' => 'Es necesario ingresar un nombre para el paciente.',
        'nombre.min' => 'El nombre del paciente debe tener al menos 3 caracteres.',
        
        
    ];
    public static $rules = [
        'nombre' => 'required|min:3'    
    ];


    protected $fillable = [
        'nombre'
       
    ];
    public function paciente(){
        return $this->hasMany("App\Especialidad");
    }
}


