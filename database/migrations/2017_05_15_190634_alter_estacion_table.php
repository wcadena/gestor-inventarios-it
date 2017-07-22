<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEstacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estaciones', function (Blueprint $table) {
            $table->enum('pais', ['ECUADOR', 'COLOMBIA','EL SALVADOR']);
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
