<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableChklisOpcheck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function __construct()
    {
        \Illuminate\Support\Facades\DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    public function up()
    {
        Schema::table('check_list__opciones_check_lists', function (Blueprint $table) {
            $table->string('valor1', 255)->nullable()->change();
            $table->string('valor2', 255)->nullable()->change();
            $table->string('valor3', 255)->nullable()->change();
            $table->string('valor4', 255)->nullable()->change();
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
            //
        });
    }
}
