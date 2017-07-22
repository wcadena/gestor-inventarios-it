<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustodiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custodios', function (Blueprint $table) {
            $table->increments('id');
            $table->string("pais");
            $table->string("ciudad");
            $table->string("direccion");
            $table->string("area-piso");
            $table->string("documentoIdentificacion");
            $table->string("cargo");
            $table->string("compania");
            $table->string("telefono");
            $table->enum('estado', ['ACTIVO', 'INACTIVO']);
            $table->softDeletes();
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
        Schema::drop('custodios');
    }
}
