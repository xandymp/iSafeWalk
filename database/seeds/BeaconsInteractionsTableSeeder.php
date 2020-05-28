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
        // beacon 1 has no interactions

        // beacon 2 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 6,
            'duration' => 24,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 8,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 9,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 11,
            'duration' => 12,
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 14,
            'duration' => 20,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 15,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 3 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 2,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 6,
            'duration' => 20,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 8,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 10,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 11,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 13,
            'duration' => 84,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 14,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 4 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 2,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 3,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 6,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 8,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 10,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 11,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 13,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 14,
            'duration' => 16,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 5 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 10,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 6 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 2,
            'duration' => 24,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 3,
            'duration' => 20,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 10,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 11,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 12,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 13,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 14,
            'duration' => 28,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        // beacon 7 has no interactions

        // beacon 8 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 1,
            'duration' => 16,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 2,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 3,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 9,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 10,
            'duration' => 24,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 11,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 13,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 14,
            'duration' => 32,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 9 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 2,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 3,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 6,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 8,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 10,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 11,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 14,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 10 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 1,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 6,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 8,
            'duration' => 24,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 11,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 13,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 14,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 11 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 2,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 6,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 8,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 9,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 10,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 14,
            'duration' => 180,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 12 has no interactions

        // beacon 13 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 2,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 3,
            'duration' => 84,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 4,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 6,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 8,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 10,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 11,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 14,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 14 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 2,
            'duration' => 20,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 3,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 4,
            'duration' => 16,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 6,
            'duration' => 28,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 8,
            'duration' => 32,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 10,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 11,
            'duration' => 180,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 15 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 2,
            'duration' => 12,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 6,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 8,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 10,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 11,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 14,
            'duration' => 8,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
    }
}
