<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGarantiaHPCamposToEquiposTable extends Migration
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
            Schema::table('equipos', function (Blueprint $table) {
                $table->string('hp_warrantyLevel')->nullable();
                $table->string('hp_endDate')->nullable();
                $table->string('hp_displaySerialNumber')->nullable();
                $table->string('hp_modelNumber')->nullable();
                $table->string('hp_countryOfPurchase')->nullable();
                $table->string('hp_newProduct_seriesName')->nullable();
                $table->string('hp_newProduct_imageUrl')->nullable();
                $table->string('hp_warrantyResultRedirectUrl')->nullable();
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
        Schema::table('equipos', function (Blueprint $table) {
            //
        });
    }
}
