<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $table = 'tarifa';

    protected $fillable = ['id_paquete','edad_min','edad_max','valor'];


    public function paquetes(){
    	return $this->belongsTo(Paquete::class ,'id_paquete');
    }
}
