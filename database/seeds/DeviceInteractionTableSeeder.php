<?php

use Illuminate\Database\Seeder;

class DeviceInteractionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // device 1 interactions
        App\DeviceInteraction::create([
            'primary_device_id' => 1,
            'secondary_device_id' => 2,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 1,
            'secondary_device_id' => 3,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 1,
            'secondary_device_id' => 6,
            'interactions' => 10,
        ]);

        // device 2 interactions
        App\DeviceInteraction::create([
            'primary_device_id' => 2,
            'secondary_device_id' => 1,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 2,
            'secondary_device_id' => 3,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 2,
            'secondary_device_id' => 4,
            'interactions' => 10,
        ]);

        // device 3 interactions
        App\DeviceInteraction::create([
            'primary_device_id' => 3,
            'secondary_device_id' => 1,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 3,
            'secondary_device_id' => 2,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 3,
            'secondary_device_id' => 5,
            'interactions' => 10,
        ]);

        // device 4 interactions
        App\DeviceInteraction::create([
            'primary_device_id' => 4,
            'secondary_device_id' => 2,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 4,
            'secondary_device_id' => 5,
            'interactions' => 10,
        ]);

        // device 5 interactions
        App\DeviceInteraction::create([
            'primary_device_id' => 5,
            'secondary_device_id' => 3,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 5,
            'secondary_device_id' => 4,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 5,
            'secondary_device_id' => 6,
            'interactions' => 10,
        ]);

        App\DeviceInteraction::create([
            'primary_device_id' => 6,
            'secondary_device_id' => 1,
            'interactions' => 10,
        ]);
        App\DeviceInteraction::create([
            'primary_device_id' => 6,
            'secondary_device_id' => 5,
            'interactions' => 10,
        ]);
    }
}
