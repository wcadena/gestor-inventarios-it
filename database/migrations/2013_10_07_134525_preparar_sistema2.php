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
        DB::unprepared(file_get_contents($path));
        //dd(\App\Empresa::all());
        DB::insert('INSERT INTO `users` VALUES (23,\'Admin System\',\'Admin\',\'System\',\'system\',\'admin\',\'admin@admin.com\',\''.bcrypt('secret').'\',NULL,\'2018-08-04 19:00:29\',\'2018-08-04 19:00:29\',NULL,\''.bcrypt('secret').'\',NULL,\'1\',\''.bcrypt('secret').'\',NULL,\'Avianca EC\');');
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
