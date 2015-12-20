<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoCuentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_cuenta', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('f_inicial');
            $table->dateTime('f_final');
            $table->decimal('monto', 5, 2);
            $table->string('detalle', 200);
            $table->integer('cuenta_usuario_id')->unsigned();
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
        Schema::drop('pago_cuenta');
    }
}
