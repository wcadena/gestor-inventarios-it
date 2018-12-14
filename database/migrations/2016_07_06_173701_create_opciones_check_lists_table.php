<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpcionesCheckListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('opciones_check_lists', function (Blueprint $table) {
                $table->increments('id');
                ////////////////
                $table->integer('area_id')->unsigned();
                $table->foreign('area_id')->references('id')->on('areas');

                $table->string('atributo');
                $table->enum('mandatorio', ['SI', 'NO']);
                $table->enum('tipo', ['si-no', 'text', 'equipo_id', 'fecha', 'si-no&version', 'ip', 'equipo_id&texto']);

                $table->timestamps();
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
        Schema::dropIfExists('opciones_check_lists');
    }
}
