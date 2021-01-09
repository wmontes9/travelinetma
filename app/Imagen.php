<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = "imagens";

    protected $fillable = ["id_destino","url_imagen"];

    public function destino()
    {
        return $this->belongsTo(Destino::class);
    }
}
