<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableTarifa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tarifa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_paquete')->index();
            $table->string('edad_min');
            $table->string('edad_max');
            $table->string('valor');
            $table->timestamps();

            $table->foreign('id_paquete')->references('id')->on('paquetes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifa');
    }
}
