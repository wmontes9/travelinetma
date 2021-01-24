<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    protected $table = "lineas";


    protected $fillable = ["nombre","vivencia"];

    public function tipos()
    {
    	return $this->belongsToMany(Tipo::class, 'tipo_lineas', 'id_linea', 'id_tipo');
    }
    
    public function paquetes()
    {
        return $this->hasMany(Paquete::class, 'id_linea');
    }
}
 