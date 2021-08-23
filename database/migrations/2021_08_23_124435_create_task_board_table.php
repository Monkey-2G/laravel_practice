<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 할일 게시판 table
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('task_board', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id'); // id
            $table->bigInteger('user_id'); // 회원 id
            $table->string('subject', 100);  // 제목
            $table->longText('content'); // 내용
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
        Schema::dropIfExists('task_board');
    }
}
