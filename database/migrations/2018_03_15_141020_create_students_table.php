<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('sex');
            $table->string('avatar')->default('default.jpg');
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('password');
            $table->integer('age');
            $table->string('emg_contact');
            $table->integer('emg_cont_phon');
            $table->date('dateregis');
            $table->string('user_id');
            $table->string('section');
            $table->integer('grade');
            $table->string('status');
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
        Schema::dropIfExists('students');
    }
}
