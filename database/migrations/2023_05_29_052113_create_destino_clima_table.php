<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinoClimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destino_clima', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_clima');
            $table->unsignedBigInteger('id_destino');
            $table->timestamps();

            $table->foreign('id_clima')->references('id')->on('clima');
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
        Schema::dropIfExists('destino_clima');
    }
}
