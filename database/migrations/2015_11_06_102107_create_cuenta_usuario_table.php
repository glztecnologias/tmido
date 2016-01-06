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
            $table->dateTime('f_creacion');
            $table->string('nombres', 150);
            $table->string('apellidos', 150);
            $table->string('rut', 45);
            $table->string('email', 45);
            $table->string('comuna', 45);
            $table->string('ciudad', 45);
            $table->string('pais', 45);
            $table->string('password', 45);
            $table->string('dni', 45);
            $table->dateTime('f_nac');
            $table->string('sexo', 45);
            $table->string('facebook', 45);
            $table->string('google', 45);
            $table->integer('tipo_usuario_id')->unsigned();
            $table->integer('cont_megusta')->unsigned();
            $table->integer('cont_nomegusta')->unsigned();
            $table->integer('cont_comenta')->unsigned();
            $table->integer('cont_comparte')->unsigned();
            $table->integer('cont_evalua')->unsigned();
            $table->integer('cont_publica')->unsigned();
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
