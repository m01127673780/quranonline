<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Stat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('font_awesome')->nullable();;  
            $table->string('number')->nullable();;  
            $table->string('head_ar')->nullable();; 
            $table->string('head_en')->nullable();; 
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
        Schema::dropIfExists('stat');
    }
}