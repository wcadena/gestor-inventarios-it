<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class BorradoTablasRolPermisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('permisorols');
        Schema::dropIfExists('usuariorols');
        Schema::dropIfExists('rols');
        Schema::dropIfExists('permisos');
        Schema::dropIfExists('modulos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
