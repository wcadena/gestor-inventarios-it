<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('imagen');
            $table->string('descripcion');
            $table->string('lugar');
            $table->double('lat',20,10);
            $table->double('lng',20,10);
            ////////////////
            $table->integer('motivo_den_id')->unsigned();
            $table->foreign('motivo_den_id')->references('id')->on('motivos__denuncias');
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
        Schema::table('denuncias', function (Blueprint $table) {
            //
        });
    }
}
