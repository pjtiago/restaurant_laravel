<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('fk_visible')->default(1);
            $table->timestamps();

            $table->foreign('fk_visible')->references('id')->on('boolean_options');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
