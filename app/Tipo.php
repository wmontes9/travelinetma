<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = "tipos";

    protected $fillable = ["nombre"];

    public function lineas(){
    	return $this->belongsToMany(Linea::class, 'tipo_lineas', 'id_tipo', 'id_linea');
    }
}
