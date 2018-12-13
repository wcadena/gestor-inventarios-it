<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformeMantenimientoPreventivoTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('informe_manto_prev_tecs', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                $table->integer('informe_manto_prev_id')->unsigned();
                $table->foreign('informe_manto_prev_id')->references('id')->on('informe_manto_prevs');
                $table->timestamps();
                $table->softDeletes();
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
        Schema::dropIfExists('informe_manto_prev_tecs');
        //Schema::dropIfExists('informe_manto_prevs');
    }
}
