<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id'
    ];
    public function categoria(){
        return $this->belongsTo("App\Categoria");
    }
    public function empresa(){
        return $this->hasMany("App\Empresa");
    }
}
