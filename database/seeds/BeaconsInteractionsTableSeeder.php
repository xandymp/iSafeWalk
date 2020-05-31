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
        // interactions for 2020-05-26 10:00:00
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
            'interaction_time' => '2020-05-26 10:00:00',
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

        // interactions for 2020-05-28 10:00:00

        // beacon 1 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 2,
            'duration' => 2320,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 3,
            'duration' => 2544,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 4,
            'duration' => 2044,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 6,
            'duration' => 972,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 9,
            'duration' => 1604,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 10,
            'duration' => 6264,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 11,
            'duration' => 3592,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 13,
            'duration' => 6688,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 14,
            'duration' => 6936,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 15,
            'duration' => 6936,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 2 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 1,
            'duration' => 2320,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 3,
            'duration' => 804,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 4,
            'duration' => 1264,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 6,
            'duration' => 1412,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 9,
            'duration' => 2260,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 10,
            'duration' => 7004,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 11,
            'duration' => 9964,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 13,
            'duration' => 2488,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 14,
            'duration' => 2480,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 15,
            'duration' => 19052,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 3 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 1,
            'duration' => 2544,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 2,
            'duration' => 804,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 4,
            'duration' => 4476,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 6,
            'duration' => 5472,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 9,
            'duration' => 1888,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 10,
            'duration' => 7400,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 11,
            'duration' => 2132,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 13,
            'duration' => 2580,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 14,
            'duration' => 2724,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 15,
            'duration' => 4764,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 4 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 1,
            'duration' => 2044,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 2,
            'duration' => 1264,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 3,
            'duration' => 4476,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 6,
            'duration' => 4560,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 9,
            'duration' => 1724,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 10,
            'duration' => 7692,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 11,
            'duration' => 2820,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 13,
            'duration' => 2704,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 14,
            'duration' => 3476,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 15,
            'duration' => 5028,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 5 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 2,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 10,
            'duration' => 8,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 14,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 6 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 1,
            'duration' => 972,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 2,
            'duration' => 1412,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 3,
            'duration' => 5472,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 4,
            'duration' => 4560,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 9,
            'duration' => 2796,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 10,
            'duration' => 7448,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 11,
            'duration' => 3832,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 13,
            'duration' => 3192,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 14,
            'duration' => 3544,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 15,
            'duration' => 5868,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 9 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 1,
            'duration' => 1604,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 2,
            'duration' => 2260,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 3,
            'duration' => 1888,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 4,
            'duration' => 1724,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 6,
            'duration' => 2796,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 10,
            'duration' => 3344,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 11,
            'duration' => 2400,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 13,
            'duration' => 2996,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 14,
            'duration' => 2912,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 15,
            'duration' => 5324,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 10 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 1,
            'duration' => 6264,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 2,
            'duration' => 7004,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 3,
            'duration' => 7400,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 4,
            'duration' => 7692,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 5,
            'duration' => 8,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 6,
            'duration' => 7448,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 9,
            'duration' => 3344,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 11,
            'duration' => 10136,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 13,
            'duration' => 7124,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 14,
            'duration' => 10184,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 1,
            'duration' => 19688,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 11 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 1,
            'duration' => 3592,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 2,
            'duration' => 9964,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 3,
            'duration' => 2132,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 4,
            'duration' => 2820,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 6,
            'duration' => 3832,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 9,
            'duration' => 2400,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 10,
            'duration' => 10136,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 13,
            'duration' => 4268,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 14,
            'duration' => 4452,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 15,
            'duration' => 20300,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 13 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 1,
            'duration' => 6688,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 2,
            'duration' => 2488,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 3,
            'duration' => 2580,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 4,
            'duration' => 2704,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 6,
            'duration' => 3192,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 9,
            'duration' => 2996,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 10,
            'duration' => 7124,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 11,
            'duration' => 4268,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 14,
            'duration' => 8224,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 15,
            'duration' => 5912,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 14 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 1,
            'duration' => 6936,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 2,
            'duration' => 2480,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 3,
            'duration' => 2724,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 4,
            'duration' => 3476,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 6,
            'duration' => 3544,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 9,
            'duration' => 2912,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 10,
            'duration' => 10184,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 11,
            'duration' => 4452,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 13,
            'duration' => 8224,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 15,
            'duration' => 4284,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 15 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 1,
            'duration' => 6936,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 2,
            'duration' => 19052,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 3,
            'duration' => 4764,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 4,
            'duration' => 5028,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 6,
            'duration' => 5868,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 9,
            'duration' => 5324,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 10,
            'duration' => 19688,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 11,
            'duration' => 20300,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 13,
            'duration' => 5912,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 14,
            'duration' => 4284,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
    }
}
