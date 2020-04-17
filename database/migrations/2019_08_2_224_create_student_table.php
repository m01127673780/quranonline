<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name')->nullable(); 
             $table->string('email')->nullable(); 
             $table->string('phone')->nullable(); 
             $table->string('message')->nullable(); 
             $table->string('how_aboutus')->nullable(); 
             $table->string('location')->nullable(); 
             $table->string('timezone')->nullable(); 
             $table->string('date')->nullable(); 
             $table->string('st1_name')->nullable(); 
             $table->string('st1_Gender')->nullable(); 
             $table->string('st1_course')->nullable(); 
             $table->string('st1_age')->nullable();
             $table->string('st2_name')->nullable(); 
             $table->string('st2_Gender')->nullable(); 
             $table->string('st2_course')->nullable(); 
             $table->string('st2_age')->nullable();
             $table->string('st3_name')->nullable(); 
             $table->string('st3_Gender')->nullable(); 
             $table->string('st3_course')->nullable(); 
             $table->string('st3_age')->nullable();
             $table->string('st4_name')->nullable(); 
             $table->string('st4_Gender')->nullable(); 
             $table->string('st4_course')->nullable(); 
             $table->string('st4_age')->nullable();
             $table->string('st5_name')->nullable(); 
             $table->string('st5_Gender')->nullable(); 
             $table->string('st5_course')->nullable(); 
             $table->string('st5_age')->nullable(); 
             $table->string('time')->nullable(); 
             $table->string('icon')->nullable(); 
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
        Schema::dropIfExists('student');
    }
}
