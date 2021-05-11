<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleServicio extends Model
{
    protected $table = 'detalle_Servicio';

    protected $fillable = ['id_servicio','id_paquete','valor'];
}
