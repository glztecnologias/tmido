<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 200);
            $table->string('sufijo_titulo', 45);
            $table->string('descripcion', 500);
            $table->string('tipo', 10);
            $table->integer('cant_participa')->unsigned()->nullable(); 
            $table->index(['nombre']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('competencia');
    }
}
