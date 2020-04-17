<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHalfhourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halfhour', function (Blueprint $table) {
            $table->increments('id');
            $table->string('head_ar');
            $table->string('head_en'); 
            $table->string('dateshow_ar')->nullable();
            $table->string('dateshow_en')->nullable();
            $table->string('number')->nullable();
            $table->string('content_ar');
            $table->string('content_en');
            $table->string('descount3_ar')->nullable();
            $table->string('descount3_en')->nullable();
            $table->string('percentage3')->nullable();
            $table->string('descount6_ar')->nullable();
            $table->string('descount6_en')->nullable();
            $table->string('percentage6')->nullable();
            $table->string('descount12_ar')->nullable();
            $table->string('descount12_en')->nullable();
            $table->string('percentage12')->nullable();
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
        Schema::dropIfExists('halfhour');
    }
}


