<?php

use Illuminate\Database\Seeder;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Zone::create([
            'name' => 'Zone 01',
            'x_length' => 10,
            'y_width' => 9,
            'z_height' => 3,
        ]);
    }
}
