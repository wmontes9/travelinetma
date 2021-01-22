<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoLinea extends Model
{
    protected $table = 'tipo_lineas';
    protected $fillable = ['id_linea','id_tipo'];
}
