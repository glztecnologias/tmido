<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeGustaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('me_gusta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('si', 45);
            $table->string('no', 45);
            $table->integer('cuenta_usuario_id')->unsigned();
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
        Schema::drop('me_gusta');
    }
}
