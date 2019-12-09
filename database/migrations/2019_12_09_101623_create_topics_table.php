<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->index();
            $table->text('body');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('reply_count')->unsigned()->default(0)->comment('回复总数');
            $table->integer('view_count')->unsigned()->default(0)->comment('浏览总数');
            $table->integer('votes_count')->unsigned()->default(0)->comment('点赞总数');
            $table->integer('rewards_count')->unsigned()->default(0)->comment('打赏总数');
            $table->integer('gifts_count')->unsigned()->default(0)->comment('礼赞总数');
            $table->integer('favorites_count')->unsigned()->default(0)->comment('收藏总数');
            $table->integer('last_reply_user_id')->unsigned()->default(0);
            $table->integer('order')->unsigned()->default(0);
            $table->text('excerpt')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
