<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoInformeMantoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_manto_historico', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('informe_manto_prev_id')->unsigned();
            $table->foreign('informe_manto_prev_id')->references('id')->on('informe_manto_prevs')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('accion');
            /*$table->integer('informe_manto_prev_id')->unsigned();
            $table->foreign('informe_manto_prev_id')->references('id')->on('informe_manto_prevs')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('proyecto_seccion_id')->unsigned();
            $table->foreign('proyecto_seccion_id')->references('id')->on('proyecto_seccions')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->enum('tipo', ['titulo_seccion', 'elemento_seccion'])->default('elemento_seccion');
            $table->integer('orden');
*/
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto_seccions');
    }
}
