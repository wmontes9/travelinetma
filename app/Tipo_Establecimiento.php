<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Establecimiento extends Model
{
    protected $table = "tipo__establecimientos";

    protected $fillable = ["nombre"];

    public function establecimientos()
    {
    	return $this->hasMany(Establecimiento::class, 'id_tipo');
    }
}
