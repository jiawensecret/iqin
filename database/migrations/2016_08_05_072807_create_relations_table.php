<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sponsor_id');
            $table->integer('reply_user');
            $table->tinyInteger('type')->default(0);// 类型 0好友 1黑名单
            $table->tinyInteger('status')->default(0);//状态 0未通过 1通过
            $table->unique(['sponsor_id','reply_user']);
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
        Schema::drop('relations');
    }
}
