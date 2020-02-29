<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('fk_category_id');
            $table->unsignedBigInteger('fk_visible')->default(1);
            $table->unsignedBigInteger('fk_highlight')->default(2);
            $table->timestamps();

            $table->foreign('fk_category_id')->references('id')->on('categories');
            $table->foreign('fk_visible')->references('id')->on('boolean_options');
            $table->foreign('fk_highlight')->references('id')->on('boolean_options');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
