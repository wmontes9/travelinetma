<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table = "paquetes";

    protected $fillable = ["id_linea","nombre","duracion", "valor"];

   /* public function servicios()
    {
        return $this->belongsToMany(Servicio::class,'detalle_servicio','id_paquete', 'id_servicio');
    }*/
    public function servicios()
    {
        return $this->belongsToMany(Servicio::class,'detalle_servicio','id_paquete', 'id_servicio')->withPivot('id_servicio','valor');
    }
    
    public function destinos()
    {
    	return $this->hasMany(Destino::class, 'id_paquete');
    }

    public function itinerario()
    {
    	return $this->hasMany(Itinerario::class, 'id_paquete');
    }

    
    public function linea()
    {
        return $this->belongsTo(Linea::class, 'id_linea');
    }
}
