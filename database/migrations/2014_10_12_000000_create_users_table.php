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
            $table->string('avatar')->default('/images/avatar/default-avatar.png')->comment('注册默认头像');
            $table->string('introduction')->nullable()->comment('个人简介');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('phone')->unique()->nullable()->comment('电话');
            $table->tinyInteger('status')->default(1)->comment('状态[1:正常,0:隐藏,-1:删除]');
            $table->tinyInteger('sex')->nullable()->comment('性别[1:男,0:女]');
            $table->string('grade')->default('1')->comment('用户组[1:小学生，2：初中生，3：高中生，4：大学生，5：学士,6：硕士,7:博士,8:博士后]');
            $table->string('roles')->nullable()->comment('角色[1:Founder,2:开发者,3:财务,4:管理员,5:总编辑,6：编辑,7:版主,8:实习版主,9:运营,10:营销]');
            $table->string('permissions')->nullable()->comment('权限[1：站点设置,2:修改、删除、审核用户,3:修改、删除、审核帖子,4:财务管理,5:允许查看财务,6：允许前台修改、删除、审核贴子,7:系统管理,8:市场营销]');
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
