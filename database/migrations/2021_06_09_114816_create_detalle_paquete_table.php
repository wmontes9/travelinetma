<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_paquete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_paquete");
            $table->unsignedBigInteger("id_destino");
            $table->string("orden");
            $table->timestamps();

            $table->foreign("id_paquete")->references("id")->on("paquetes")->delete("cascade");
            $table->foreign("id_destino")->references("id")->on("destinos")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_paquete');
    }
}
