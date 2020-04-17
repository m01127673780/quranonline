<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidertextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slidertext', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link')->nullable(); 
            $table->string('head_en')->nullable(); 
            $table->string('head_ar')->nullable(); 
            $table->string('title_en')->nullable(); 
            $table->string('title_ar')->nullable(); 
            $table->string('text1_ar')->nullable(); 
            $table->string('text1_en')->nullable(); 
            $table->string('text2_ar')->nullable(); 
            $table->string('text2_en')->nullable(); 
            $table->string('text3_ar')->nullable(); 
            $table->string('text3_en')->nullable(); 
             $table->string('img')->nullable();;
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
        Schema::dropIfExists('slidertext');
    }
}
