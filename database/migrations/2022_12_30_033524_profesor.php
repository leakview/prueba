<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Profesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profeso', function (Blueprint $table) {
            $table->increments('id_profe');
            $table->string('nombre_profe');
            $table->string('apellidos_profe');
            $table->integer('grado_profe');
            $table->integer('edad_profe');
            $table->string('sexo_profe');
            $table->string('titulo_profe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
