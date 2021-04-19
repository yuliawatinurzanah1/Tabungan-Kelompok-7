<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
             $table->bigIncrements('rep_id');
             $table->unsignedBigInteger('rep_tcr_id');
             $table->unsignedBigInteger('rep_stu_id');
             $table->unsignedBigInteger('rep_class_id');
             $table->unsignedBigInteger('rep_sav_id');
             $table->unsignedBigInteger('rep_usa_id');
         
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
        Schema::dropIfExists('reports');
    }
}
