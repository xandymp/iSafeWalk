<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(DeviceTableSeeder::class);
         $this->call(PeopleTableSeeder::class);
         $this->call(SectorTableSeeder::class);
         $this->call(RouterTableSeeder::class);
         $this->call(SectorRouterTableSeeder::class);
         $this->call(LocationHistoryTableSeeder::class);
    }
}
