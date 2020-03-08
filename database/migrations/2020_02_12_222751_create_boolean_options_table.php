<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooleanOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('boolean_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('translation');
        });
    }

    public function down()
    {
        Schema::dropIfExists('boolean_options');
    }
}
