<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $table = 'type_user';

    protected $fillable = ['id_rol','id_user'];

    
}
