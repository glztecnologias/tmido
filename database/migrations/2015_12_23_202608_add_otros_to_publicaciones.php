<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtrosToPublicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publicaciones', function (Blueprint $table) {
            //
            $table->integer('megusta')->unsigned();
            $table->integer('nomegusta')->unsigned();
            $table->integer('neto_megusta'); //al votar se procesa y registra al final aca
            $table->integer('comparte')->unsigned();
            $table->decimal('valoracion',2,1)->unsigned(); //al valorar se procesa y registra al final aca
            $table->string('url_foto', 400);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicaciones', function (Blueprint $table) {
            //
        });
    }
}
