<?php

use Illuminate\Database\Seeder;

class BeaconsInteractionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // beacon 1 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 2,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 3,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 6,
            'interactions' => 10,
        ]);

        // beacon 2 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 1,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 3,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 4,
            'interactions' => 10,
        ]);

        // beacon 3 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 1,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 2,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 5,
            'interactions' => 10,
        ]);

        // beacon 4 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 2,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 5,
            'interactions' => 10,
        ]);

        // beacon 5 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 3,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 4,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 6,
            'interactions' => 10,
        ]);

        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 1,
            'interactions' => 10,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 5,
            'interactions' => 10,
        ]);
    }
}
