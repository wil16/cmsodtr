<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
   {
       Schema::create('timesheet', function (Blueprint $table) {
           $table->increments('id');
           $table->date('date');
           $table->time('time_in');
           $table->string('capture_img_in');
           $table->time('time_out');
           $table->string('capture_img_out');
           $table->unsignedInteger('users_id');
           $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
       });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timesheet');
    }
}
