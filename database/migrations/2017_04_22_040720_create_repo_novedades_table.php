<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRepoNovedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('repo_novedades', function (Blueprint $table) {
                $table->increments('id');

                $table->integer('custodio_id')->unsigned();
                $table->foreign('custodio_id')->references('id')->on('custodios');

                $table->date('fecha_novedades');

                $table->string('correo');

                $table->enum('novedad', ['Asignación', 'Reasignación', 'Baja']);

                $table->string('observaciones');

                $table->integer('antiguo_custodio_id')->unsigned();
                $table->foreign('antiguo_custodio_id')->references('id')->on('custodios');

                $table->integer('traslado_custodio_id')->unsigned()->nullable();
                $table->foreign('traslado_custodio_id')->references('id')->on('custodios');

                $table->enum('estado', ['Traslado', 'Devolución']);

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
        Schema::dropIfExists('repo_novedades');
    }
}
