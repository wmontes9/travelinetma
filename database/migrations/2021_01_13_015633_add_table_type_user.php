<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableTypeUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user')->index();
            $table->unsignedBigInteger('id_rol')->index(); 
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_rol')->references('id')->on('rols');
        });
        //Schema::dropIfExists('detalle_servicio');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_user');
    }
}
