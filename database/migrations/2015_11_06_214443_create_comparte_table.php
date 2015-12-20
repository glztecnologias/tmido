<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComparteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comparte', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->string('red_social', 45);
            $table->integer('cuenta_usuario_id')->unsigned()->nullable();
            $table->integer('publicaciones_id')->unsigned();
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
        Schema::drop('comparte');
    }
}
