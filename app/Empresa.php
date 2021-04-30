<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    protected $fillable = [
        'nombre',
        'descripcion',
        'subcategoria_id'

    ];
    public function subcategoria(){
        return $this->belongsTo("App\Subcategoria");
    }
    
}
