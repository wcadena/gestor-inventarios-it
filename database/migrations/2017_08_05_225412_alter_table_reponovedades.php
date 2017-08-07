<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableReponovedades extends Migration
{
    public function __construct()
    {
        \Illuminate\Support\Facades\DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repo_novedades_detalles', function (Blueprint $table) {
            //
            $table->binary('imagen')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repo_novedades_detalles', function (Blueprint $table) {
            //
        });
    }
}
