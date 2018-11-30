<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BorrarPadrinoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('padrino');
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
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('users', function (Blueprint $table) {
                //
            });
        }
    }
}
