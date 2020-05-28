<?php

use Illuminate\Database\Seeder;

class GatewayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Gateway::create([
            'name' => 'Gateway 01',
            'serial' => '0123456789',
            'zone_id' => 1,
            'zone_x' => 75,
            'zone_y' => 0,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 02',
            'serial' => '0123123123',
            'zone_id' => 1,
            'zone_x' => 50,
            'zone_y' => 30,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 03',
            'serial' => '0123123456',
            'zone_id' => 1,
            'zone_x' => 50,
            'zone_y' => 60,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 04',
            'serial' => '0123789456',
            'zone_id' => 1,
            'zone_x' => 75,
            'zone_y' => 90,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 05',
            'serial' => '4567898654',
            'zone_id' => 1,
            'zone_x' => 100,
            'zone_y' => 60,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 06',
            'serial' => '6743482909',
            'zone_id' => 1,
            'zone_x' => 100,
            'zone_y' => 30,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 07',
            'serial' => '7573825823',
            'zone_id' => 1,
            'zone_x' => 25,
            'zone_y' => 0,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 08',
            'serial' => '5728291098',
            'zone_id' => 1,
            'zone_x' => 0,
            'zone_y' => 20,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 09',
            'serial' => '5826582099',
            'zone_id' => 1,
            'zone_x' => 25,
            'zone_y' => 40,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 10',
            'serial' => '0947682649',
            'zone_id' => 1,
            'zone_x' => 0,
            'zone_y' => 65,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 11',
            'serial' => '8576246261',
            'zone_id' => 1,
            'zone_x' => 50,
            'zone_y' => 90,
        ]);
    }
}
