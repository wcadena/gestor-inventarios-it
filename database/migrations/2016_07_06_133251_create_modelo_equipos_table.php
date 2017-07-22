<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("modelo");
            $table->string("fabricante");
            $table->integer("garantia_anios");
            $table->string("tipo_equipo");

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
        Schema::drop('modelo_equipos');
    }
}
