<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerario extends Model
{
    protected $table = "itinerarios";

    protected $fillable = ["id_paquete","fecha_inicio","fecha_fin", "hora_salida","hora_retorno","descripcioj"];

    public function servicio(){
    	return $this->hasMany('App\servicio');
    }
    public function destino(){
    	return $this->hasMany('App\destino');
    }
    public function linea(){
        return $this->belongsTo(linea::class);
    }
}
