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
        $affected = DB::update('update equipos set sociedad = ?', [(env('EMP_PRINCIPAL', 'Ecuatask'))]);
        $affected = DB::update('update custodios set 	compania = ?', [(env('EMP_PRINCIPAL', 'Ecuatask'))]);
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
