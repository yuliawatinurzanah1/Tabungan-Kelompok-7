<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saving_usages', function (Blueprint $table) {
             $table->bigIncrements('usa_id');
             $table->unsignedBigInteger('usa_stu_id');
             $table->unsignedBigInteger('usa_class_id');
             $table->string('usa_amount');
             $table->string('usa_date');
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
        Schema::dropIfExists('saving_usages');
    }
}
