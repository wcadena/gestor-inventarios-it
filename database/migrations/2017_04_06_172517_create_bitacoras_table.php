<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_equipos')->unsigned();
            $table->foreign('id_equipos')->references('id')->on('equipos');

            $table->string("titulo");
            $table->date("fecha_ingreso");

            $table->integer('custodio_id')->unsigned();
            $table->foreign('custodio_id')->references('id')->on('custodios');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string("problema");
            $table->string("solucion");


            $table->enum('estado', ['enviado', 'recibido','en_reparacion','espera_repuesto','reparado','para_dar_baja','en_garantía']);


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bitacoras');
    }
}
