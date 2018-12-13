<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('puestos', function (Blueprint $table) {
                $table->increments('id');

                ////////////////
                $table->integer('ubicacion_id')->unsigned()->nullable();
                $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
                ////////////////

                $table->string('codigo');
                $table->string('detalle')->nullable();
                $table->string('x')->nullable();
                $table->string('y')->nullable();
                $table->enum('estado', ['OCUPADO', 'RESERVADO', 'LIBRE']);

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
        Schema::dropIfExists('puestos');
    }
}
