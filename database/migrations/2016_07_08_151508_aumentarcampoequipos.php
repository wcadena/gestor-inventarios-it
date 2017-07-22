<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aumentarcampoequipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipos', function (Blueprint $table) {
            /*$table->string('ard_cid');
            $table->string('ard_office');
            $table->string('ard_atid');
            $table->string('atid_proprinter_asociado');
            $table->string('cm');
            $table->string('fm');
            $table->string('sape');
            $table->integer('equipo_id_impresora1')->unsigned()->nullable();
            $table->integer('equipo_id_impresora2')->unsigned()->nullable();
            $table->integer('equipo_id_equipo1')->unsigned()->nullable();
            $table->integer('equipo_id_equipo2')->unsigned()->nullable();
            $table->string('observaciones1');
            $table->string('observaciones2');
            //$table->foreign('equipo_id')->references('id')->on('equipos');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipos', function (Blueprint $table) {
            /*$table->dropColumn('ard_cid');
            $table->dropColumn('ard_office');
            $table->dropColumn('ard_atid');
            $table->dropColumn('atid_proprinter_asociado');
            $table->dropColumn('cm');
            $table->dropColumn('fm');
            $table->dropColumn('sape');
            $table->dropColumn('equipo_id_impresora1');
            $table->dropColumn('equipo_id_impresora2');
            $table->dropColumn('equipo_id_equipo1');
            $table->dropColumn('equipo_id_equipo2');
            $table->dropColumn('observaciones1');
            $table->dropColumn('observaciones2');*/
        });
    }
}
