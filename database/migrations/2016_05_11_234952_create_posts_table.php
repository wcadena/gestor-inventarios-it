<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('posts', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nombre_comun');
$table->string('nombre_cientifico');
$table->boolean('patrimonial');
$table->text('descripcion');
$table->string('historia');
$table->string('lat');
$table->string('lng');

                $table->timestamps();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }

}
