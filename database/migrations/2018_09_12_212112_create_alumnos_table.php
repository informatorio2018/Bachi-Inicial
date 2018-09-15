<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('nacido_en');
            $table->dateTime('fecha_nacimiento');
            $table->string('proviene_de');
            $table->string('tutor');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('nacionalidad');
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
        Schema::dropIfExists('alumnos');
    }
}
