<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCollectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_collect', function (Blueprint $table) {//收藏表 like表
            //
            $table->increments('id');
            $table->integer('user_id')->default(0)->index();//发布者
            $table->integer('user_collect_column_id')->default(0)->index();//栏目id 0为默认 没有收藏夹
            $table->string('name')->default('');
            $table->string('introduction')->default('');
            $table->string('href');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_collect', function (Blueprint $table) {
            //
        });
    }
}
