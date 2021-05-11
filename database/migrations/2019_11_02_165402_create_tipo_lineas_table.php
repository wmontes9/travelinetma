<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoLineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_lineas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_linea");
            $table->unsignedBigInteger("id_tipo");
            $table->timestamps();

            $table->foreign("id_linea")->references("id")->on("lineas")->delete("cascade");
            $table->foreign("id_tipo")->references("id")->on("tipos")->delete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_lineas');
    }
}
