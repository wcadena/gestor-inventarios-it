<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterEstacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(env('DB_MIGRACIONES', 'false')=='false')
        Schema::table('estaciones', function (Blueprint $table) {
            $table->enum('pais', ['ECUADOR', 'COLOMBIA', 'EL SALVADOR']);
            $table->string('nombre_largo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estaciones', function (Blueprint $table) {
            $table->dropColumn('pais');
            $table->dropColumn('nombre_largo');
        });
    }
}
