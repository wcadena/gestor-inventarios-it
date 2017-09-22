<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmpresaAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('areas', function (Blueprint $table) {
                $table->string('empresa');
            });
            $use = \App\Areas::all();
            foreach ($use as $u){
                $u->empresa = 'Avianca Ec';
                $u->save();

            }
            Schema::table('areas', function (Blueprint $table) {

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
        Schema::table('areas', function (Blueprint $table) {
            //
        });
    }
}
