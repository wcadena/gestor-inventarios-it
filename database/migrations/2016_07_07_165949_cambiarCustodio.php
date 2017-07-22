<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CambiarCustodio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('custodios', function (Blueprint $table) {
            $table->string('nombre_responsable');
            $table->string('area_piso');
            $table->dropColumn('area-piso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('custodios', function (Blueprint $table) {
            //
            $table->dropColumn('nombre_responsable');
        });
    }
}
