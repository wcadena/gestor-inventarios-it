<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustodiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('custodios', function (Blueprint $table) {
                $table->increments('id');
                $table->string('pais');
                $table->string('ciudad');
                $table->string('direccion');
                $table->string('area-piso');
                $table->string('documentoIdentificacion');
                $table->string('cargo');
                $table->string('compania');
                $table->string('telefono');
                $table->enum('estado', ['ACTIVO', 'INACTIVO']);
                $table->softDeletes();
                $table->timestamps();
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
        Schema::dropIfExists('custodios');
    }
}
