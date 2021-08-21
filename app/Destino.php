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
    public function paquetes()
    {
    	return $this->belongsToMany(Paquete::class, 'detalle_paquete','id_paquete','id_destino')->withPivot('id_paquete','id_destino','orden');
    }  
    public function detalles_paquetes()
    {
        return $this->hasMany(DetallePaquete::class);
    }
   
}
