<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_user");
            $table->string('id_paquete');
            $table->string('id_transaccion');
            $table->string('metodo');
            $table->string('valor'); 
            $table->string('fecha',10);
            $table->string('estado');
            $table->timestamps();


            $table->foreign("id_user")->references("id")->on("users")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
}
