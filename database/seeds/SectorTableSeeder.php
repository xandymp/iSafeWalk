<?php

use Illuminate\Database\Seeder;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Sector::create([
            'name' => 'Sector 01',
            'horizontal' => 5,
            'vertical' => 9,
        ]);

        App\Sector::create([
            'name' => 'Sector 02',
            'horizontal' => 5,
            'vertical' => 4,
        ]);

        App\Sector::create([
            'name' => 'Sector 03',
            'horizontal' => 5,
            'vertical' => 5,
        ]);
    }
}
