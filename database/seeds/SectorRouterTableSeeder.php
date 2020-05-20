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
            'router_x' => 2.5,
            'router_y' => 0,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 2,
            'router_x' => 0,
            'router_y' => 3,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 3,
            'router_x' => 0,
            'router_y' => 6,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 4,
            'router_x' => 2.5,
            'router_y' => 9,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 5,
            'router_x' => 5,
            'router_y' => 6,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 6,
            'router_x' => 5,
            'router_y' => 3,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 7,
            'router_x' => 2.5,
            'router_y' => 0,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 8,
            'router_x' => 0,
            'router_y' => 2,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 9,
            'router_x' => 2.5,
            'router_y' => 4,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 2,
            'router_x' => 5,
            'router_y' => 3,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 10,
            'router_x' => 0,
            'router_y' => 2.5,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 11,
            'router_x' => 2.5,
            'router_y' => 3,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 9,
            'router_x' => 2.5,
            'router_y' => 0,
            'router_z' => 1,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 3,
            'router_x' => 5,
            'router_y' => 2,
            'router_z' => 1,
        ]);
    }
}
