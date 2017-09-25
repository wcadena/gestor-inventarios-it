<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmpresaEstacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estaciones', function (Blueprint $table) {
            $table->string('empresa');
            });
            $use = \App\Estaciones::all();
            foreach ($use as $u){
                $u->empresa = 'Avianca Ec';
                $u->save();

            }
            Schema::table('estaciones', function (Blueprint $table) {

                $table->foreign('empresa')->references('empresa')->on('empresas');
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
            //
        });
    }
}
