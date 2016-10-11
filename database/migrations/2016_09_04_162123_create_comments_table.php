<?php

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
        Schema::create('comments',function (Blueprint $table){

            $table->increments('id');
            $table->string('sender_name');
            $table->string('email');
            $table->string('content');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();
        });

        Schema::create('temp_comments',function (Blueprint $table){

            $table->increments('id');
            $table->string('sender_name');
            $table->string('email');
            $table->string('content');
            $table->unsignedBigInteger('post_id');
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
        Schema::drop('comments');
        Schema::drop('temp_comments');
    }
}
