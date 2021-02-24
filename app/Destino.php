<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $table = "destinos";

    protected $fillable = ["id_paquete","nombre"];

    public function imagenes(){
    	return $this->hasMany(Imagen::class, 'id_destino');
    }    
}
