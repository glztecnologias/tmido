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
            $table->integer('puntaje');
            $table->string('opcion', 100);
            $table->mediumText('respuesta_desarrollo');
            $table->dateTime('f_creacion');
            $table->integer('descriptor_evaluacion_id')->unsigned();
            $table->integer('evaluaciones_id')->unsigned();
            $table->integer('evaluador_id')->unsigned();
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
