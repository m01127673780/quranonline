<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quick', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name')->nullable(); 
             $table->string('email')->nullable(); 
             $table->string('subject')->nullable(); 
             $table->string('phone')->nullable(); 
             $table->string('message')->nullable(); 
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
        Schema::dropIfExists('quick');
    }
}
