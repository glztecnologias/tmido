<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoracion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('puntaje', 45);
            $table->dateTime('fechahora');
            $table->integer('cuenta_usuario_id')->unsigned()->nullable();
            $table->integer('publicaciones_id')->unsigned()->nullable();
            $table->integer('comentarios_id')->unsigned()->nullable();
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
        Schema::drop('valoracion');
    }
}
