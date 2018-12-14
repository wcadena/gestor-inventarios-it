<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PuestosPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('puestos_custodios', function (Blueprint $table) {
                $table->increments('id');

                ////////////////
                $table->integer('puesto_id')->unsigned()->nullable();
                $table->foreign('puesto_id')->references('id')->on('puestos');

                $table->integer('custodio_id')->unsigned();
                $table->foreign('custodio_id')->references('id')->on('custodios');
                ////////////////
                $table->dateTime('fecha_inicio');
                $table->dateTime('fecha_fin');
                $table->dateTime('horas_trabajadas');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puestos_custodios');
    }
}
