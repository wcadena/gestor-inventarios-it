<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NormalizarUnicoToReporteNovedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //$affected = DB::update('update repo_novedades set token_unico = ?', \App\RepoNovedades::generarUnico());
        $todos = \App\RepoNovedades::all();
        foreach ($todos as $uno){
            if($uno->token_unico == null){
                $uno->token_unico=\App\RepoNovedades::generarUnico();
                $uno->save();
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repo_novedades', function (Blueprint $table) {
            //
        });
    }
}
