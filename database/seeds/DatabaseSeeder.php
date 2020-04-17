<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $this->call(SettingDB::class);
          $this->call(AdminDB::class);
         $this->call(FooterDB::class);
    }
}
