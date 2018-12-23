<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmpresaUsuariosTable extends Migration
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
            Schema::table('users', function (Blueprint $table) {
                $table->string('empresa');
            });
        }

        $affected = DB::update('update users set empresa = ?', [(env('EMP_PRINCIPAL', 'Ecuatask'))]);

        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('users', function (Blueprint $table) {
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
        if (Schema::hasColumn('users', 'empresa')) {
            DB::statement('ALTER TABLE users  DROP FOREIGN KEY users_empresa_foreign, DROP empresa;');
        }
    }
}
