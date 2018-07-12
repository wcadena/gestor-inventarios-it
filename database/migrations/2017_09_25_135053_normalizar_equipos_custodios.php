<?php

use Illuminate\Database\Migrations\Migration;

class NormalizarEquiposCustodios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $affected = DB::update('update equipos set sociedad = ?', ['Avianca Ec']);
        $affected = DB::update('update custodios set 	compania = ?', ['Avianca Ec']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
