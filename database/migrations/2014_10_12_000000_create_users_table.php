<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('avatar')->default('/images/avatar/default-avatar.png');
            $table->string('introduction')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('phone')->unique()->nullable()->comment('电话');
            $table->tinyInteger('status')->default(1)->comment('状态[1:正常,0:隐藏,-1:删除]');
            $table->tinyInteger('sex')->nullable()->comment('性别[1:男,0:女]');
            $table->string('identity')->default('1')->comment('用户组[1:小学生，2：初中生，3：高中生，4：大学生，5：学士,6：硕士,7:博士,8:博士后');
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
