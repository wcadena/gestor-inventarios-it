<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuitarmodelosNousados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('arbol__padrinos');
        Schema::dropIfExists('arbols');
        Schema::dropIfExists('denuncias');
        Schema::dropIfExists('events');
        Schema::dropIfExists('motivos__denuncias');
        Schema::dropIfExists('posts');

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
