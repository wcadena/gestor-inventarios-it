<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::create('empresas', function (Blueprint $table) {
                $table->string('empresa')->unique();
                $table->timestamps();
                $table->softDeletes();
            });
        }
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            $e = new \App\Empresa();
            $e->empresa = env('EMP_PRINCIPAL', 'Ecuatask');
            $e->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
