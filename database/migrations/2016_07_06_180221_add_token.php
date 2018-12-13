<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddToken extends Migration
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
                //
                $table->uuid('token');
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
        /*if (Schema::hasColumn('users', 'token')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('token');
            });
        }*/
    }
}
