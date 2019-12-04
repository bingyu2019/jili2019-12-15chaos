<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->unsignedBigInteger('parent_id')->nullable()->comment('父ID');
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('code',50)->unique()->comment('标识');
            $table->string('name',100)->default('')->comment('名称');
            $table->string('icon')->comment('图标');
            $table->smallInteger('sort')->comment('排序');
            $table->tinyInteger('status')->comment('状态[1:现实,0:隐藏,-1:删除]');
            $table->text('content')->nullable()->comment('内容');
            $table->boolean('is_directory')->comment('是否拥有子分类[0:否,1:是]');
            $table->unsignedInteger('level')->default(0)->comment('当前分类层次');
            $table->string('path')->default('')->comment('该分类所以父级类目ID');
            $table->timestamp('created_at')->nullable()->comment('创建时间');
            $table->timestamp('updated_at')->nullable()->comment('修改时间');
            $table->bigInteger('created_admin_id')->default(0)->comment('创建人');
            $table->bigInteger('update_admin_id')->default(0)->comment('修改人');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
