<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableBitacoras extends Migration
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
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('bitacoras', function (Blueprint $table) {
                $table->string('solucion', 255)->nullable()->change();
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
        Schema::table('bitacoras', function (Blueprint $table) {
            //
        });
    }
}
