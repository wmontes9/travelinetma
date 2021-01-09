<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";

    protected $fillable = ["id_paquete","nombre"];

    public function paquete(){
        return $this->belongsTo(Paquete::class);
    }
}
