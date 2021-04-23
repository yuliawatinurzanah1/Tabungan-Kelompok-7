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
             $table->unsignedBigInteger('usa_amount');
             $table->date('usa_date');
             $table->string('usa_information');
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
        Schema::dropIfExists('saving_usages');
    }
}
