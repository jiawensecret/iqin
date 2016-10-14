<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCollectColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_collect_column', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('user_id')->default(0)->index();//发布者
            $table->string('name')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_collect_column', function (Blueprint $table) {
            //
        });
    }
}
