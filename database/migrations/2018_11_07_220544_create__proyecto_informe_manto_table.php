<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoInformeMantoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_seccions', function (Blueprint $table) {
            //la idea es q no se deje de crear un proyecto sin seccion, y la seccion debe tener un informe_manto
            $table->increments('id');

            $table->integer('proyecto_id')->unsigned();
            $table->foreign('proyecto_id')->references('id')->on('proyectos')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('name');
            $table->string('descripcion'); //un lugar para poner mucho mas texto sobre el proyecto
            $table->string('decoracion');
            $table->enum('tipo', ['titulo', 'seccion'])->default('seccion');
            $table->integer('orden');

            $table->enum('principal', ['si', 'no'])->default('no');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('informe_proyectos_seccions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('informe_manto_prev_id')->unsigned();
            $table->foreign('informe_manto_prev_id')->references('id')->on('informe_manto_prevs')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('proyecto_seccion_id')->unsigned();
            $table->foreign('proyecto_seccion_id')->references('id')->on('proyecto_seccions')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->enum('tipo', ['titulo_seccion', 'elemento_seccion'])->default('elemento_seccion');
            $table->integer('orden');

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
        Schema::dropIfExists('informe_proyectos_seccions');
    }
}
