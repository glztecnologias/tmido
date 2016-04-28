<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRandomcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('random_code', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',40);
            $table->integer('cuenta_usuario_id')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned()->nullable();
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
        Schema::drop('random_code');
    }
}
