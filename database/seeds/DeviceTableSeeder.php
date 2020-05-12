<?php

use Illuminate\Database\Seeder;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Device::create([
            'name' => 'Device 01',
            'serial' => '0123456789',
        ]);

        App\Device::create([
            'name' => 'Device 02',
            'serial' => '9876543210',
        ]);

        App\Device::create([
            'name' => 'Device 03',
            'serial' => '4561237890',
        ]);

        App\Device::create([
            'name' => 'Device 04',
            'serial' => '7890123456',
        ]);
    }
}
