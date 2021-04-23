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
           $table->date('sav_date');
           $table->timestamp('created_at')->nullable();
           $table->timestamp('updated_at')->nullable();
           $table->timestamp('deleted_at')->nullable();

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
