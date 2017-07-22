<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepoNovedadesDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repo_novedades_detalles', function (Blueprint $table) {
            $table->increments('id');
            ////////////////

            $table->integer('repo_novedades_id')->unsigned();
            $table->foreign('repo_novedades_id')->references('id')->on('repo_novedades');


            $table->integer('id_equipos')->unsigned();
            $table->foreign('id_equipos')->references('id')->on('equipos');

            $table->integer('modelo_equipo_id')->unsigned();
            $table->foreign('modelo_equipo_id')->references('id')->on('modelo_equipos');
            ////////////////
            $table->integer('orden_de_compra_id')->unsigned();
            $table->foreign('orden_de_compra_id')->references('id')->on('orden_de_compras');
            ////////////////
            $table->integer('custodio_id')->unsigned();
            $table->foreign('custodio_id')->references('id')->on('custodios');
            ////////////////
            $table->integer('estacione_id')->unsigned();
            $table->foreign('estacione_id')->references('id')->on('estaciones');
            ////////////////
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');
            ////////////////
            $table->integer('check_list_id')->unsigned()->nullable();
            $table->foreign('check_list_id')->references('id')->on('check_lists');

            $table->binary('imagen');

            $table->integer("num_cajas");
            $table->string("sociedad");
            $table->string("no_serie");
            $table->string("codigo_barras");
            $table->string("codigo_avianca");
            $table->string("codigo_otro");
            $table->string("descripcion");
            $table->string("ip");
            /*$table->string("modelo");
            $table->string("cpu");
            $table->string("monitor");
            $table->string("orden_compra");
            $table->string("cod_activo");
            $table->string("custodio");
            $table->string("estacion");
            $table->string("oficina");*/
            $table->enum('estado', ['BUENO', 'MALO','NUEVO']);
            $table->enum('estatus', ['VIGENTE', 'BODEGA','BAJA']);
            $table->enum("garantia", ['SI', 'NO']);
            $table->string("observaciones");

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
        Schema::drop('repo_novedades_detalles');
    }
}
