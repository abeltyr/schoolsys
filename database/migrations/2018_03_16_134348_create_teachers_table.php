<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('avatar')->default('default.jpg');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role_id');
            $table->integer('phone')->unique();
            $table->integer('pin');
            $table->integer('rank')->default('0');
            $table->string('grade');
            $table->string('subject');
            $table->string('section');
            $table->rememberToken();
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
        Schema::dropIfExists('teachers');
    }
}
