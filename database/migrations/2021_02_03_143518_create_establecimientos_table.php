<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_tipo");
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->text('descripcion');
            $table->string('url');
            $table->string('url_imagen');
            $table->timestamps();


            $table->foreign("id_tipo")->references("id")->on("tipo__establecimientos")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimientos');
    }
}
