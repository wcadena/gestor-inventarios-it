<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmpresConfigurationAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('configuracions', function (Blueprint $table) {
                $table->string('empresa');
            });
        }
        $affected = DB::update('update configuracions set empresa = ?', [(env('EMP_PRINCIPAL', 'Ecuatask'))]);

        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('configuracions', function (Blueprint $table) {
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
        if (Schema::hasColumn('configuracions', 'empresa')) {
            DB::statement('ALTER TABLE configuracions  DROP FOREIGN KEY configuracions_empresa_foreign, DROP empresa;');
        }
    }
}
