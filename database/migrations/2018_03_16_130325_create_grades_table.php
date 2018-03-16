<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grade');
            $table->string('subj1')->default('0');
            $table->string('subj2')->default('0');
            $table->string('subj3')->default('0');
            $table->string('subj4')->default('0');
            $table->string('subj5')->default('0');
            $table->string('subj6')->default('0');
            $table->string('subj7')->default('0');
            $table->string('subj8')->default('0');
            $table->string('subj9')->default('0');
            $table->string('subj10')->default('0');
            $table->string('subj11')->default('0');
            $table->string('subj12')->default('0');
            $table->string('subj13')->default('0');
            $table->string('subj14')->default('0');
            $table->string('subj15')->default('0');
            $table->string('subj16')->default('0');
            $table->string('subj17')->default('0');
            $table->string('subj19')->default('0');
            $table->string('subj20')->default('0');
            $table->string('subj21')->default('0');
            $table->string('subj22')->default('0');
            $table->string('subj23')->default('0');
            $table->string('subj24')->default('0');
            $table->string('subj25')->default('0');
            $table->string('subj26')->default('0');
            $table->string('subj27')->default('0');
            $table->string('subj28')->default('0');
            $table->string('subj29')->default('0');
            $table->string('subj30')->default('0');
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
        Schema::dropIfExists('grades');
    }
}
