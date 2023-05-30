<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinoZonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destino_zona', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_destino');
            $table->unsignedBigInteger('id_zona');
            $table->timestamps();

            $table->foreign('id_destino')->references('id')->on('destino');
            $table->foreign('id_zona')->references('id')->on('zona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destino_zona');
    }
}
