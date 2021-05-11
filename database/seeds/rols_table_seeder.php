<?php

use Illuminate\Database\Seeder;
use App\Rol;

class rols_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = array(
        	array('tipo'=>'SuperAdmin'),
        	array('tipo'=>'Admin')
        );

        foreach ($rols as $key => $value) {
        	$rol = new Rol();
        	$rol->tipo = $value['tipo'];
        	$rol->save();
        }
    }
}
