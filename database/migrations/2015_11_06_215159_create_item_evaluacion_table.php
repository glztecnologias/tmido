<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('puntaje')->nullable(); //evaluacion de valoracion
            $table->string('si_no', 2)->nullable(); //si o no
            $table->string('mg_nomg', 4)->nullable(); //mg o nomg
            $table->integer('voto')->nullable(); // solo 1;
            $table->mediumText('respuesta_desarrollo')->nullable(); //respuesta_desarrollo
            $table->dateTime('f_creacion');
            $table->integer('descriptor_evaluacion_id')->unsigned()->nullable();
            $table->integer('evaluador_id')->unsigned();

            $table->integer('publicaciones_id')->unsigned()->nullable();
            // si es una publicacion de competencia se activa esto

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
        Schema::drop('item_evaluacion');
    }
}
