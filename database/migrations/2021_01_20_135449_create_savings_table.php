<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
           $table->bigIncrements('sav_id');
           $table->unsignedBigInteger('sav_stu_id');
           $table->unsignedBigInteger('sav_class_id');
           $table->unsignedBigInteger('sav_amount');
           $table->string('sav_date');
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
        Schema::dropIfExists('savings');
    }
}
