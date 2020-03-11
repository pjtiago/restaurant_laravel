<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('message');
            $table->string('author');
            $table->string('email');
            $table->unsignedBigInteger('fk_post');
            $table->unsignedBigInteger('fk_approved');
            $table->timestamps();

            $table->foreign('fk_post')->references('id')->on('posts');
            $table->foreign('fk_approved')->references('id')->on('boolean_options');
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
