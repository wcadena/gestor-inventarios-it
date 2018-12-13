<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AumentarcampoidentificadorChecklistOp2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('check_list__opciones_check_lists', function (Blueprint $table) {
                $table->string('atributo');
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
        if (Schema::hasColumn('check_list__opciones_check_lists', 'atributo')) {
            Schema::table('check_list__opciones_check_lists', function (Blueprint $table) {
                $table->dropColumn('atributo');
            });
        }
    }
}
