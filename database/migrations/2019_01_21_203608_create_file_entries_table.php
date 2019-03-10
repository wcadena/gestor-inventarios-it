<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //https://blog.usejournal.com/file-upload-with-laravel-and-vuejs-a70ae85e34a1
        Schema::dropIfExists('file_entries');
        Schema::create('file_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('vinculo');
            $table->uuid('vinculo_padre');
            $table->string('filename');
            $table->string('mime');
            $table->string('path');
            $table->integer('size');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->enum('tipo', ['normal', 'solo_lectura', 'oculto'])->default('normal')->comment('Si se puede ');
            $table->string('imageable_type');
            $table->integer('imageable_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_entries');
    }
}
