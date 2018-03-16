<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowsubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowsubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('name');
            $table->string('semister');
            $table->string('per_subj1')->default('0');
            $table->string('per_subj2')->default('0');
            $table->string('per_subj3')->default('0');
            $table->string('per_subj4')->default('0');
            $table->string('per_subj5')->default('0');
            $table->string('per_subj6')->default('0');
            $table->string('per_subj7')->default('0');
            $table->string('per_subj8')->default('0');
            $table->string('per_subj9')->default('0');
            $table->string('per_subj10')->default('0');
            $table->string('per_subj11')->default('0');
            $table->string('per_subj12')->default('0');
            $table->string('per_subj13')->default('0');
            $table->string('per_subj14')->default('0');
            $table->string('per_subj15')->default('0');
            $table->string('per_subj16')->default('0');
            $table->string('per_subj17')->default('0');
            $table->string('per_subj19')->default('0');
            $table->string('per_subj20')->default('0');
            $table->string('per_subj21')->default('0');
            $table->string('per_subj22')->default('0');
            $table->string('per_subj23')->default('0');
            $table->string('per_subj24')->default('0');
            $table->string('per_subj25')->default('0');
            $table->string('per_subj26')->default('0');
            $table->string('per_subj27')->default('0');
            $table->string('per_subj28')->default('0');
            $table->string('per_subj29')->default('0');
            $table->string('per_subj30')->default('0');
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
        Schema::dropIfExists('lowsubs');
    }
}
