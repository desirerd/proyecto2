<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //

    protected $fillable = [
        'nombre',
        'apellidos',
        'descripcion',
        'especialidad_id',
        'image'
    ];
    public function especialidad(){
        return $this->belongsTo("App\Especialidad",'especialidad_id');
    }

    public function getEspecialidadNameAttribute()
    {
        if ($this->especialidad)
            return $this->especialidad->nombre;

        return 'General';
    }

 public function doctor()
    {
    	return $this->belongsTo(Especialidad::class);
    }

 public function getFeaturedImageUrlAttribute()
    {
        $featuredImage = $this->image;
      
            return $featuredImage;
       
    }
	
}





 
