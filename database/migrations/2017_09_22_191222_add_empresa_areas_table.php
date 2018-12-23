<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmpresaAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('areas', function (Blueprint $table) {
                $table->string('empresa');
            });
        }

        $affected = DB::update('update areas set empresa = ?', [(env('EMP_PRINCIPAL', 'Ecuatask'))]);

        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('areas', function (Blueprint $table) {
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
        if (Schema::hasColumn('areas', 'empresa')) {
            DB::statement('ALTER TABLE areas  DROP FOREIGN KEY areas_empresa_foreign, DROP empresa;');
        }
    }
}
