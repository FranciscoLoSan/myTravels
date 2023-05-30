<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinoAlojamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destino_alojamiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_alojamiento');
            $table->unsignedBigInteger('id_destino');
            $table->integer('calificacion');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_alojamiento')->references('id')->on('alojamiento');
            $table->foreign('id_destino')->references('id')->on('destino');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destino_alojamiento');
    }
}
