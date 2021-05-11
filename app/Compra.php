<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compra';

    protected $fillable = ['nombres','telefono','correo','id_paquete','valor','fecha','estado'];


    function paquetes(){
    	return $this->belongsTo(Paquete::class, 'id_paquete','id');
    }

    public function detalles(){
    	return $this->hasMany(DetalleCompra::class, 'id_compra');
    }

    public function cliente(){
    	return $this->belongsTo(User::class, 'id_cliente');
    }
}
