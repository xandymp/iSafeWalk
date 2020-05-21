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
            'x_length' => 5,
            'y_width' => 9,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 5,
            'initial_y' => 0,
        ]);

        App\Sector::create([
            'name' => 'Sector 02',
            'x_length' => 5,
            'y_width' => 4,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 0,
            'initial_y' => 0,
        ]);

        App\Sector::create([
            'name' => 'Sector 03',
            'x_length' => 5,
            'y_width' => 5,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 0,
            'initial_y' => 4,
        ]);
    }
}
