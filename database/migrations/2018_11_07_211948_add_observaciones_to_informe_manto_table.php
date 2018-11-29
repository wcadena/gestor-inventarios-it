<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddObservacionesToInformeMantoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('descripcion'); //un lugar para poner mucho mas texto sobre el proyecto
            $table->string('decoracion');
            $table->enum('tipo', ['lista', 'tablero'])->default('lista');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('informe_manto_prevs', function (Blueprint $table) {
            $table->uuid('vinculo');
            $table->string('observacion');
            $table->string('telefono_contacto');
            $table->string('celular_contacto');
            $table->string('email_contacto');
            $table->ipAddress('ip');

            $table->enum('like', ['blanco', 'like', 'unlike'])->default('blanco');
            $table->enum('publico_privado', ['publico', 'privado'])->default('publico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');

        Schema::table('informe_manto_prevs', function (Blueprint $table) {
            $table->dropColumn('observacion');
            $table->dropColumn('telefono_contacto');
            $table->dropColumn('celular_contacto');
            $table->dropColumn('email_contacto');
        });
    }
}
