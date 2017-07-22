<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArbolPadrinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbol__padrinos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            ////////////////
            $table->integer('arbol_id')->unsigned();
            $table->foreign('arbol_id')->references('id')->on('arbols');
            ////////////////
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arbol__padrinos', function (Blueprint $table) {
            //
        });
    }
}
