<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisorolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisorols', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('permiso_id')->unsigned();
            $table->foreign('permiso_id')->references('id')->on('permisos');
            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rols');

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
        Schema::dropIfExists('permisorols');
    }
}
