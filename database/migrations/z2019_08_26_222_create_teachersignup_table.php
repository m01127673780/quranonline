<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherSignupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachersignup', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name')->nullable(); 
             $table->string('email')->nullable(); 
             $table->string('phone')->nullable(); 
             $table->string('message')->nullable(); 
             $table->string('how_aboutus')->nullable(); 
             $table->string('location')->nullable(); 
             $table->string('timezone')->nullable(); 
             $table->string('date')->nullable();  
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
        Schema::dropIfExists('teachersignup');
    }
}
 