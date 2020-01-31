<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'messages', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('workspace_id');
                $table->bigInteger('from');
                $table->bigInteger('to');
                $table->text('message');
                $table->tinyInteger('is_read');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
