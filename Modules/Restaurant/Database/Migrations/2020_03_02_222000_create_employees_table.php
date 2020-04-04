<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatEemployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('birthday')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->unsignedBigInteger('fk_visible')->default(1);
            $table->timestamps();

            $table->foreign('fk_visible')->references('id')->on('boolean_options');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
