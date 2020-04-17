<?php

use Illuminate\Database\Seeder;
use App\Model\Setting;

class SettingDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i = 0; $i <1; $i++){

        	$add = new  Setting;
        	$add->sitename_ar   = 'sitename_ar';
        	$add->sitename_en   = 'sitename_en';
        	$add->logo  	    = 'logo.png';
        	$add->icon          = 'icon.png';
        	$add->email         = 'm@m.com';
        	$add->description   = 'description';
        	$add->keywords      = 'keywords';
        	$add->status        = 'open';
        	$add->message_maintenance   = 'message_maintenance';
        	$add->main_lang      = 'ar';
        	$add->save();
        }
    }
}
