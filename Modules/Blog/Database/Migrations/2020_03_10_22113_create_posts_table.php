<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('content');
            $table->unsignedBigInteger('fk_user');
            $table->unsignedBigInteger('fk_post_category');
            $table->unsignedBigInteger('fk_visible');
            $table->unsignedBigInteger('fk_highlight');
            $table->timestamps();

            $table->foreign('fk_user')->references('id')->on('users');
            $table->foreign('fk_post_category')->references('id')->on('post_categories');
            $table->foreign('fk_visible')->references('id')->on('boolean_options');
            $table->foreign('fk_highlight')->references('id')->on('boolean_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
