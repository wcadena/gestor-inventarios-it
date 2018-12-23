<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmpresaEstacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('estaciones', function (Blueprint $table) {
                $table->string('empresa');
            });
        }
        $affected = DB::update('update estaciones set empresa = ?', [(env('EMP_PRINCIPAL', 'Ecuatask'))]);

        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('estaciones', function (Blueprint $table) {
                $table->foreign('empresa')->references('empresa')->on('empresas');
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
        if (Schema::hasColumn('estaciones', 'empresa')) {
            DB::statement('ALTER TABLE estaciones  DROP FOREIGN KEY estaciones_empresa_foreign, DROP empresa;');
        }
    }
}
