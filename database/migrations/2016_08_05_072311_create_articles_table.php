<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->default(0)->index();//发布者
            $table->integer('note_id')->default(0)->index();//note的推送id
            $table->char('title',255);//标题
            $table->tinyInteger('reprint')->default(0);//是否是转载 1为转载
            $table->char('reprint_href',255)->default('');//转载链接
            $table->char('introduction',255);//导读
            $table->tinyInteger('md')->default(0);//是否为md格式
            $table->tinyInteger('hot')->default(0);//热门 1为热门
            $table->tinyInteger('top')->default(0);//置顶 1为置顶
            $table->Integer('love')->default(0);//赞
            $table->integer('click')->default(0);//点击数
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
        Schema::drop('articles');
    }
}
