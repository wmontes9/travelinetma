<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableDetalleCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
    public function up()
    {
     Schema::create('detalle_compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_compra");
            $table->string('nombres'); 
            $table->string('apellidos'); 
            $table->string('tipo_documento');
            $table->string('documento');
            $table->string('edad'); 
            $table->timestamps();


            $table->foreign("id_compra")->references("id")->on("compra")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_compra');
    }
}
