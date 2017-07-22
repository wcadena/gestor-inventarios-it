<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_equipos')->unsigned();
            $table->enum('acciondb', ['crear', 'actualizar','editar','borrar']);
            ////////////////
            $table->integer('modelo_equipo_id')->unsigned();
            ////////////////
            $table->integer('orden_de_compra_id')->unsigned();
            ////////////////
            $table->integer('custodio_id')->unsigned();
            ////////////////
            $table->integer('estacione_id')->unsigned();
            ////////////////
            $table->integer('area_id')->unsigned();
            ////////////////
            $table->integer('check_list_id')->unsigned()->nullable();

            $table->binary('imagen');
            $table->integer("num_cajas");
            $table->string("sociedad");
            $table->string("no_serie");
            $table->string("codigo_barras");
            $table->string("codigo_avianca");
            $table->string("codigo_otro");
            $table->string("descripcion");
            $table->string("ip");
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
        Schema::drop('equipos_logs');
    }
}
