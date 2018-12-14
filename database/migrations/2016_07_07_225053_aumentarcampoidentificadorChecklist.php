<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AumentarcampoidentificadorChecklist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('check_lists', function (Blueprint $table) {
                $table->string('id_check_lists');
                $table->uuid('unik_check_lists');
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
        if (Schema::hasColumn('check_lists', 'id_check_lists')) {
            Schema::table('check_lists', function (Blueprint $table) {
                $table->dropColumn('id_check_lists');
            });
        }
        if (Schema::hasColumn('check_lists', 'unik_check_lists')) {
            Schema::table('check_lists', function (Blueprint $table) {
                $table->dropColumn('unik_check_lists');
            });
        }
    }
}
