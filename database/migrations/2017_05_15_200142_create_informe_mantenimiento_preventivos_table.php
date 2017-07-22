<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeMantenimientoPreventivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_manto_prevs', function (Blueprint $table) {
            $table->increments('id');

            ////////////////
            $table->integer('custodio_id')->unsigned();
            $table->foreign('custodio_id')->references('id')->on('custodios');

            ////////////////
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');

            ////////////////


            $table->string('no_orden');

            $table->date('fecha_solicitud');
            $table->date('fecha_ejecucion');


            $table->time('hora_inicio');
            $table->time('hora_fin');

            $table->integer('informe_manto_prev_cate_id')->unsigned();
            $table->foreign('informe_manto_prev_cate_id')->references('id')->on('informe_manto_prev_cates');

            $table->string('requerimiento');
            $table->string('solucion')->nullable();
            $table->string('resolucion')->nullable();


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
        Schema::drop('informe_manto_prevs');
    }
}
