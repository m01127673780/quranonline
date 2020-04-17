<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_ar')->nullable();
            $table->string('payment_en')->nullable(); 
            $table->string('contact_ar')->nullable();
            $table->string('contact_en')->nullable();
            $table->string('callus_ar')->nullable();
            $table->string('callus_en')->nullable();
            $table->string('emaill')->nullable();
            $table->string('import_info_ar')->nullable();
            $table->string('import_info_en')->nullable();      
            $table->string('aboutus_ar')->nullable();
            $table->string('aboutus_en')->nullable();    
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('googel')->nullable();
            $table->string('youtube')->nullable();
            $table->string('link_appstore')->nullable();
            $table->string('link_googelplay')->nullable();
            $table->string('img_appstore')->nullable();
            $table->string('img_googelplay')->nullable();
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
        Schema::dropIfExists('footer');
    }
}