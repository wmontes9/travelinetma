<?php

use Illuminate\Database\Seeder;
use App\user;
use App\TypeUser;
use Illuminate\Support\Facades\Hash;

class users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('admin');
        $user->apellidos = 'sistema';
        $user->documento = '00000000000';
        $user->telefono = '00000000000';
        $user->foto = 'fghfghf';
        $user->save();

        $id_user = $user->id;

        $type = new TypeUser();
        $type->id_user = $id_user;
        $type->id_rol = 2;
        $type->save();

    }
}
