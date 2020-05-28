<?php

use Illuminate\Database\Seeder;

class BeaconTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Beacon::create([
            'name' => 'Beacon 01',
            'serial' => '0123456789',
        ]);

        App\Beacon::create([
            'name' => 'Beacon 02',
            'serial' => '9876543210',
        ]);

        App\Beacon::create([
            'name' => 'Beacon 03',
            'serial' => '4561237890',
        ]);

        App\Beacon::create([
            'name' => 'Beacon 04',
            'serial' => '7890123456',
        ]);

        App\Beacon::create([
            'name' => 'Beacon 05',
            'serial' => '7623654263',
        ]);
    }
}
