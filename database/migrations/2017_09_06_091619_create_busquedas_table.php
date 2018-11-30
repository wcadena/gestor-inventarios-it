<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusquedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('busquedas', function (Blueprint $table) {
                $table->increments('id');

                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                $table->string('palabra_q');
                $table->string('instancia');
                $table->string('instancia_id');
                $table->string('dato');

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
        Schema::dropIfExists('busquedas');
    }
}
