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
            'router_horizontal' => 2.5,
            'router_vertical' => 0,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 2,
            'router_horizontal' => 0,
            'router_vertical' => 3,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 3,
            'router_horizontal' => 0,
            'router_vertical' => 6,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 4,
            'router_horizontal' => 2.5,
            'router_vertical' => 9,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 5,
            'router_horizontal' => 5,
            'router_vertical' => 6,
        ]);

        App\SectorRouter::create([
            'sector_id' => 1,
            'router_id' => 6,
            'router_horizontal' => 5,
            'router_vertical' => 3,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 7,
            'router_horizontal' => 2.5,
            'router_vertical' => 0,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 8,
            'router_horizontal' => 0,
            'router_vertical' => 2,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 9,
            'router_horizontal' => 2.5,
            'router_vertical' => 4,
        ]);

        App\SectorRouter::create([
            'sector_id' => 2,
            'router_id' => 2,
            'router_horizontal' => 5,
            'router_vertical' => 3,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 10,
            'router_horizontal' => 0,
            'router_vertical' => 2.5,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 11,
            'router_horizontal' => 2.5,
            'router_vertical' => 3,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 9,
            'router_horizontal' => 2.5,
            'router_vertical' => 0,
        ]);

        App\SectorRouter::create([
            'sector_id' => 3,
            'router_id' => 3,
            'router_horizontal' => 5,
            'router_vertical' => 2,
        ]);
    }
}
