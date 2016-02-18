<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentaUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('f_creacion')->nullable();
            $table->string('nombres', 150)->nullable();
            $table->string('apellidos', 150)->nullable();
            $table->string('rut', 45)->nullable();
            $table->string('email', 45);
            $table->string('url_foto', 200);
            $table->string('comuna', 45)->nullable();
            $table->string('ciudad', 45)->nullable();
            $table->string('pais', 45)->nullable();
            $table->string('password', 45);
            $table->string('dni', 45)->nullable();
            $table->dateTime('f_nac')->nullable();
            $table->string('sexo', 45)->nullable();
            $table->string('facebook', 45)->nullable();
            $table->string('google', 45)->nullable();
            $table->integer('tipo_usuario_id')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned()->nullable();
            $table->integer('cont_megusta')->unsigned()->nullable();
            $table->integer('cont_nomegusta')->unsigned()->nullable();
            $table->integer('cont_comenta')->unsigned()->nullable();
            $table->integer('cont_comparte')->unsigned()->nullable();
            $table->integer('cont_evalua')->unsigned()->nullable();
            $table->integer('cont_publica')->unsigned()->nullable();
            $table->timestamps();
            $table->index(['rut', 'email', 'dni', 'sexo', 'comuna', 'ciudad', 'pais']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cuenta_usuario');
    }
}
//$table->string('email')->unique();
//$table->index(['account_id', 'created_at']);
