<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emessages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('send_user')->default(0);
            $table->integer('recipient');
            $table->string('title');
            $table->json('content');
            $table->integer('is_reply');
            $table->integer('reply_id');
            $table->tinyInteger('status')->default(0);
            $table->integer('send_time');
            $table->integer('recipient_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emessages');
    }
}
