<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('custodio_id')->nullable()->unsigned();
            $table->foreign('custodio_id')->references('id')->on('custodios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('users', 'custodio_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropForeign(['custodio_id']);
                $table->dropColumn('custodio_id');
            });
        }
    }
}
