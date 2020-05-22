<?php

use Illuminate\Database\Seeder;

class SectorRouterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 1,
            'router_x' => 25,
            'router_y' => 0,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 2,
            'router_x' => 0,
            'router_y' => 30,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 3,
            'router_x' => 0,
            'router_y' => 60,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 4,
            'router_x' => 25,
            'router_y' => 90,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 5,
            'router_x' => 50,
            'router_y' => 60,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 6,
            'router_x' => 50,
            'router_y' => 30,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 7,
            'router_x' => 25,
            'router_y' => 0,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 8,
            'router_x' => 0,
            'router_y' => 20,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 9,
            'router_x' => 25,
            'router_y' => 40,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 2,
            'router_x' => 50,
            'router_y' => 30,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 10,
            'router_x' => 0,
            'router_y' => 25,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 11,
            'router_x' => 25,
            'router_y' => 30,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 9,
            'router_x' => 25,
            'router_y' => 0,
            'router_z' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 3,
            'router_x' => 50,
            'router_y' => 20,
            'router_z' => 2,
        ]);
    }
}
