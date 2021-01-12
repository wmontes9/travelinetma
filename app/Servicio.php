<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";

    protected $fillable = ["id_paquete","nombre"];

     public function paquetes()
    {
        return $this->belongsToMany(Paquete::class,'detalle_servicio','id_servicio', 'id_paquete');
    }
}
