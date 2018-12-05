<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAccesoCustodioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('custodios', function (Blueprint $table) {
                $table->string('verification_token')->nullable();
                $table->string('token')->nullable()->unique();
                $table->integer('direccion_preferida')->default(1)->unsigned();
                $table->string('longitud_1')->nullable();
                $table->string('latitud_1')->nullable();
                $table->string('longitud_2')->nullable();
                $table->string('latitud_2')->nullable();
                $table->string('whatsapp')->nullable();
                $table->string('telefono_celular_notificacion')->nullable();
                $table->string('slack_id')->nullable();
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
        Schema::table('custodios', function (Blueprint $table) {
            //
        });
    }
}
