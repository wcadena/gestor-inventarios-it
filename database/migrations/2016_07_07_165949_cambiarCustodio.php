<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CambiarCustodio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('custodios', function (Blueprint $table) {
                $table->string('nombre_responsable');
                $table->string('area_piso');
                $table->dropColumn('area-piso');
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
        if (Schema::hasColumn('custodios', 'nombre_responsable')) {
            Schema::table('custodios', function (Blueprint $table) {
                $table->dropColumn('nombre_responsable');
            });
        }
    }
}
