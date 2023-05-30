<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlojamientoAmbienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alojamiento_ambiente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alojamiento');
            $table->unsignedBigInteger('id_ambiente');
            $table->timestamps();

            $table->foreign('id_alojamiento')->references('id')->on('alojamiento');
            $table->foreign('id_ambiente')->references('id')->on('ambiente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alojamiento_ambiente');
    }
}
