<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostImagesTable extends Migration
{
    public function up()
    {
        Schema::create('post_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path');
            $table->unsignedBigInteger('fk_post');
            $table->timestamps();

            $table->foreign('fk_post')->references('id')->on('posts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_images');
    }
}
