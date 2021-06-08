<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleServicio extends Model
{
    protected $table = 'detalle_servicio';

    protected $fillable = ['id_servicio','id_paquete','valor'];
}
