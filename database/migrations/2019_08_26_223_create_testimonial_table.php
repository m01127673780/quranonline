<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar')->nullable();;
            $table->string('name_en')->nullable();
            $table->string('job_ar')->nullable();;
            $table->string('job_en')->nullable(); 
            $table->string('text_ar')->nullable();;
            $table->string('text_en')->nullable();
            $table->string('country_ar')->nullable();;
            $table->string('country_en')->nullable();
            $table->string('img')->nullable();
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
        Schema::dropIfExists('testimonial');
    }
}
