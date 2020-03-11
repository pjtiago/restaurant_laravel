<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesRolesTable extends Migration
{
    public function up()
    {
        Schema::create('employees_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('order')->default(0);
            $table->unsignedBigInteger('fk_employees')->default(0);
            $table->timestamps();

            $table->foreign('fk_employees')->references('id')->on('employees');

        });
    }

    public function down()
    {
        Schema::dropIfExists('employees_roles');
    }
}
