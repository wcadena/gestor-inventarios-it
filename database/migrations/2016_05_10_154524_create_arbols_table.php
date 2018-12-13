<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArbolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('arbols', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nombre_comun');
                $table->string('nombre_cientifico');
                $table->enum('patrimonial', ['si', 'no']);
                $table->string('descripcion');
                $table->binary('imagen');
                $table->string('historia');
                $table->double('lat', 20, 10);
                $table->double('lng', 20, 10);

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
        Schema::dropIfExists('arbols');
    }
}
