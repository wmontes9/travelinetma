<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetalleServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_servicio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_paquete')->index();
            $table->unsignedBigInteger('id_servicio')->index();
            $table->double('valor', 8, 2);       
            $table->timestamps();

            $table->foreign('id_paquete')->references('id')->on('paquetes');
            $table->foreign('id_servicio')->references('id')->on('servicios');
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
        Schema::dropIfExists('detalle_servicio');
    }
}
