<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('post_id');
            $table->unsignedInteger('post_id'); // 正の値
            $table->string('body');
            $table->timestamps();
            $table
              ->foreign('post_id')  // 外部キー
              ->references('id')    // post_idがpoststableのidだよという意味
              ->on('posts')
              ->onDelete('cascade');// 関連も削除される
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
