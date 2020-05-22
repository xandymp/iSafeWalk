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
            'x_length' => 50,
            'y_width' => 90,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 50,
            'initial_y' => 0,
        ]);

        App\Sector::create([
            'name' => 'Sector 02',
            'x_length' => 50,
            'y_width' => 40,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 0,
            'initial_y' => 0,
        ]);

        App\Sector::create([
            'name' => 'Sector 03',
            'x_length' => 50,
            'y_width' => 50,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 0,
            'initial_y' => 40,
        ]);
    }
}
