<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AumentarcampoidentificadorChecklistOp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('check_list__opciones_check_lists', function (Blueprint $table) {
            $table->string('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('check_list__opciones_check_lists', function (Blueprint $table) {
            $table->dropColumn('tipo');
        });
    }
}
