<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseOfSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('use_of_savings', function (Blueprint $table) {
           $table->bigIncrements('pt_id');
           $table->unsignedBigInteger('nisn');
           $table->string('name');
           $table->string('school_year');
           $table->integer('amount_of_usage');
           $table->string('information');
           $table->date('date');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('use_of_savings');
    }
}
