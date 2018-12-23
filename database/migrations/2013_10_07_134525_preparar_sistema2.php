<?php

use Illuminate\Database\Migrations\Migration;

class PrepararSistema2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $path = base_path('utils'.DIRECTORY_SEPARATOR.'populate.sql');
        $empresa_default = env('EMP_PRINCIPAL', 'Ecuatask');
        $dataPopulate_sql = str_replace('__EMP_PRINCIPAL__', $empresa_default, file_get_contents($path));
        DB::unprepared($dataPopulate_sql);
        //dd(\App\Empresa::all());
        DB::insert('INSERT INTO `users` VALUES (23,\'Admin System\',\'Admin\',\'System\',\'system\',\'admin\',\'admin@admin.com\',\''.bcrypt('secret').'\',NULL,\'2018-08-04 19:00:29\',\'2018-08-04 19:00:29\',NULL,\''.bcrypt('secret').'\',NULL,\'1\',\''.bcrypt('secret').'\',NULL,\''.env('EMP_PRINCIPAL', 'Ecuatask').'\');');
        DB::commit();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('users');
        Schema::dropIfExists('auditorias');
    }
}
