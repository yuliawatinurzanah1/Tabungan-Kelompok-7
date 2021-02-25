<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
           $table->bigIncrements('stu_id');
           $table->unsignedBigInteger('stu_usr_id');
           $table->unsignedBigInteger('stu_class_id');
           $table->string('stu_nis');
           $table->string('stu_school_year');
           
           $table->foreign('stu_usr_id')->references('usr_id')->on('users');
           $table->foreign('stu_class_id')->references('class_id')->on('classes');
           $table->timestamps();
           $table->softdeletes();
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
