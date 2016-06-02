<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 200);
            $table->string('clasificacion', 20); //votacion,valoracion1_5,valoracion1_7,valoracion1_10,si_no,mg_nmg
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
        Schema::drop('tipo_evaluacion');
    }
}
