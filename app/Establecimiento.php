<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    protected $table = "establecimientos";

    protected $fillable = ["id_tipo","nombre","direccion", "telefono", "descripcion", "url", "url_imagen"];

    public function tipos()
    {
        return $this->belongsTo(Tipo_Establecimiento::class, 'id_tipo');
    }
}
