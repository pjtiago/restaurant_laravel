<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooleanStatusTable extends Migration
{
    public function up()
    {
        Schema::create('boolean_status', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name');
            $table->string('translation');
        });
    }

    public function down()
    {
        Schema::dropIfExists('boolean_status');
    }
}
