<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckListOpcionesCheckListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('check_list__opciones_check_lists', function (Blueprint $table) {
                $table->increments('id');
                ////////////////
                $table->integer('check_list_id')->unsigned();
                $table->foreign('check_list_id')->references('id')->on('check_lists');
                ////////////////
                $table->integer('opciones_check_list_id')->unsigned();
                $table->foreign('opciones_check_list_id')->references('id')->on('opciones_check_lists');
                $table->string('valor1');
                $table->string('valor2');
                $table->string('valor3');
                $table->string('valor4');
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
        Schema::dropIfExists('check_list__opciones_check_lists');
    }
}
