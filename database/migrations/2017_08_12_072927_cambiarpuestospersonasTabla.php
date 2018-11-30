<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarpuestospersonasTabla extends Migration
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
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('puestos_custodios', function (Blueprint $table) {
                //
                $table->dateTime('fecha_fin')->nullable()->change();
                $table->integer('horas_trabajadas')->change();
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
        Schema::table('puestos_custodios', function (Blueprint $table) {
            //
        });
    }
}
