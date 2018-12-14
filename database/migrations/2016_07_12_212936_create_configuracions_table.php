<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('configuracions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('atributo');
                $table->enum('tipo', ['texto', 'lista', 'num']);
                $table->string('valores_fuente');
                $table->enum('fijo', ['FIJO', 'MOVIL']);
                $table->string('valor');
                $table->timestamps();
                $table->softDeletes();
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
        Schema::dropIfExists('configuracions');
    }
}
