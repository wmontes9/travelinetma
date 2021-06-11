<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePaquete extends Model
{
     protected $table = 'detalle_paquete';
    protected $fillable = ['id_paquete','id_destino','orden'];


    public function destino(){
        return $this->belongsTo(Destino::class, 'id_destino');
    }

    
}
