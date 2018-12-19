<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformeMantenimientoPreventivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('informe_manto_prevs', function (Blueprint $table) {
                $table->increments('id');

                ////////////////
                $table->integer('custodio_id')->unsigned();
                $table->foreign('custodio_id')->references('id')->on('custodios');

                ////////////////
                $table->integer('area_id')->unsigned();
                $table->foreign('area_id')->references('id')->on('areas');

                ////////////////

                $table->string('no_orden');

                $table->date('fecha_solicitud');
                $table->date('fecha_ejecucion');

                $table->time('hora_inicio');
                $table->time('hora_fin');

                $table->integer('informe_manto_prev_cate_id')->unsigned();
                $table->foreign('informe_manto_prev_cate_id')->references('id')->on('informe_manto_prev_cates');

                $table->string('requerimiento');
                $table->string('solucion')->nullable();
                $table->string('resolucion')->nullable();

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
        if (Schema::hasColumn('informe_manto_prevs', 'informe_manto_prev_cate_id')) {
            Schema::table('informe_manto_prevs', function (Blueprint $table) {
                $table->dropForeign(['informe_manto_prev_cate_id']);
                $table->dropColumn('informe_manto_prev_cate_id');
            });
        }
        if (Schema::hasColumn('informe_manto_prevs', 'area_id')) {
            Schema::table('informe_manto_prevs', function (Blueprint $table) {
                $table->dropForeign(['area_id']);
                $table->dropColumn('area_id');
            });
        }
        if (Schema::hasColumn('informe_manto_prevs', 'custodio_id')) {
            Schema::table('informe_manto_prevs', function (Blueprint $table) {
                $table->dropForeign(['custodio_id']);
                $table->dropColumn('custodio_id');
            });
        }

        if (Schema::hasColumn('informe_manto_prev_tecs', 'informe_manto_prev_id')) {
            Schema::table('informe_manto_prev_tecs', function (Blueprint $table) {
                $table->dropForeign(['informe_manto_prev_id']);
                $table->dropColumn('informe_manto_prev_id');
            });
        }
    }
}
