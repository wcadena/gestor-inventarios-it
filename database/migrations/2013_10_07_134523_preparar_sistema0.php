<?php

use Illuminate\Database\Migrations\Migration;

class PrepararSistema0 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //DB::unprepared('drop database '.env('DB_DATABASE').';');
        //DB::unprepared('create database '.env('DB_DATABASE').';');
       /* $tables = DB::select('SHOW TABLES');
        foreach($tables as $table){
            if($table->Tables_in_inventarios != 'migrations'||
                $table->Tables_in_inventarios != 'areas'||
                $table->Tables_in_inventarios != 'check_lists'){
                Schema::dropIfExists($table->Tables_in_inventarios);
            }

        }*/
        //Artisan::command('migrate {a}','--force');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informe_manto_historicos');
        Schema::dropIfExists('informe_manto_prevs');
        Schema::dropIfExists('users');
    }
}
