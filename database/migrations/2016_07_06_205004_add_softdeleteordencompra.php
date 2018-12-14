<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSoftdeleteordencompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (env('DB_MIGRACIONES', 'false') == 'false') {
            Schema::table('orden_de_compras', function (Blueprint $table) {
                //
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
        if (Schema::hasColumn('orden_de_compras', 'deleted_at')) {
            Schema::table('orden_de_compras', function (Blueprint $table) {
                //
                $table->dropColumn('deleted_at');
            });
        }
    }
}
