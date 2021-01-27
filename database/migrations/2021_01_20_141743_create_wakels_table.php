<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWakelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wakels', function (Blueprint $table) {
           $table->bigIncrements('teacher_id');
           $table->string('name_teacher');
           $table->integer('nuptk');
           $table->integer('nik');
           $table->string('place_of_birth');
           $table->string('date_of_birth');
           $table->string('religion');
           $table->string('marital_status');
           $table->string('address');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wakels');
    }
}
