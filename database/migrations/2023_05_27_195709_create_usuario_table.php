<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('apellido_p', 30);
            $table->string('apellido_m', 30);
            $table->string('correo', 100);
            $table->string('pass', 255);
            $table->string('estado_civil', 10)->nullable();
            $table->string('ciudad', 75);
            $table->date('fecha_nacimiento');
            $table->bigInteger('actividad1');
            $table->bigInteger('actividad2');
            $table->bigInteger('actividad3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
