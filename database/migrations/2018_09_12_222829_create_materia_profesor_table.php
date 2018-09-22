<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_profesor', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materias');

            $table->unsignedInteger('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesores');

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
        Schema::dropIfExists('materia_profesor');
    }
}
