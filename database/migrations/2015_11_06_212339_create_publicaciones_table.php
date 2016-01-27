<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 45);
            $table->string('descripcion_corta', 200);
            $table->string('descripcion_larga', 600);
            $table->dateTime('f_inicio');
            $table->dateTime('f_termino');
            $table->integer('cuenta_usuario_id')->unsigned()->nullable();
            $table->integer('tipo_publicacion_id')->unsigned()->nullable();
            $table->integer('competencia_id')->unsigned()->nullable();
            $table->integer('categoria_id')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned()->nullable();


            $table->integer('act_megusta')->unsigned(); //0 inactivo 1 activo
            $table->integer('act_comparte')->unsigned(); //0 inactivo 1 activo
            $table->integer('act_valoracion')->unsigned();//0 inactivo 1 activo
            $table->integer('act_comentarios')->unsigned();//0 inactivo 1 activo
            $table->integer('act_comentario_recurso')->unsigned();//0 inactivo 1 activo
            $table->integer('act_graficos')->unsigned();//0 inactivo 1 activo
            $table->integer('act_evaluacion')->unsigned();//0 inactivo 1 activo


            $table->timestamps();
            $table->index(['titulo', 'f_inicio', 'f_termino']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('publicaciones');
    }
}
