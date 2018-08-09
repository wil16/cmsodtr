<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
   {
       Schema::create('users', function (Blueprint $table) {
           $table->increments('id');
           $table->string('first_name');
           $table->string('last_name');
           $table->string('job_title');
           $table->string('email')->unique();
           $table->string('password');
           $table->date('hire_date');
           $table->date('end_date')->nullable();
           $table->string('profile_img')->default('default.jpg');
           $table->unsignedInteger('department_id')->nullable();
           $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
           $table->rememberToken();
           $table->timestamps();
       });
       DB::statement("ALTER TABLE users AUTO_INCREMENT = 100000;");
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
