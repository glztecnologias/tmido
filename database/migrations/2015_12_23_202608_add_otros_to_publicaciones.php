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
            $table->integer('comparte')->unsigned();
            $table->decimal('valoracion')->unsigned();
            $table->string('url_foto', 350);
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
