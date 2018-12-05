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
