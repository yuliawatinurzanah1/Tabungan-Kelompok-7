<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('tcr_id');
            $table->unsignedBigInteger('tcr_usr_id');
            $table->unsignedBigInteger('tcr_class_id');
            $table->string('tcr_nik');
            $table->string('tcr_marital_status');


            $table->foreign('tcr_usr_id')->references('usr_id')->on('users');
            $table->foreign('tcr_class_id')->references('class_id')->on('classes');
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
