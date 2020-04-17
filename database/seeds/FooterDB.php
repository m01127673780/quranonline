<?php
use Illuminate\Database\Seeder;
use App\Model\Footer;
class FooterDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <1; $i++){
            $add = new  Footer;
             
     $add = new  Footer;
            $add['twitter'] = "Admin";
            $add['facebook'] = "admin@test.com";
             $add['youtube'] = "Admin";
            $add['youtube'] = "admin@test.com";
            $add->save();
        }
    }
}
