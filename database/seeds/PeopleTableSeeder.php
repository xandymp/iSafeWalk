<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\People::create([
            'name' => 'Person 16A',
            'email' => 'mail16A@mail.com',
            'status' => 0,
            'birth_date' => '1990-01-01',
            'job_title' => 'Job 16A',
            'beacon_id' => 1,
        ]);
        App\People::create([
            'name' => 'Person 17A',
            'email' => 'mail17A@mail.com',
            'status' => 1,
            'birth_date' => '1991-01-01',
            'beacon_id' => 2,
        ]);
        App\People::create([
            'name' => 'Person 12A',
            'email' => 'mail12A@mail.com',
            'status' => 2,
            'birth_date' => '1992-01-01',
            'job_title' => 'Job 12A',
            'beacon_id' => 3,
        ]);
        App\People::create([
            'name' => 'Person 5A',
            'email' => 'mail5A@mail.com',
            'status' => 3,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 5A',
            'beacon_id' => 4,
        ]);
        App\People::create([
            'name' => 'Person 2A',
            'email' => 'mail2A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 2A',
            'beacon_id' => 5,
        ]);
        App\People::create([
            'name' => 'Person 11A',
            'email' => 'mail11A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 11A',
            'beacon_id' => 6,
        ]);
        App\People::create([
            'name' => 'Person 14A',
            'email' => 'mail14A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 14A',
            'beacon_id' => 7,
        ]);
        App\People::create([
            'name' => 'Person 9A',
            'email' => 'mail9A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 9A',
            'beacon_id' => 8,
        ]);
        App\People::create([
            'name' => 'Person 3A',
            'email' => 'mail3A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 3A',
            'beacon_id' => 9,
        ]);
        App\People::create([
            'name' => 'Person 8A',
            'email' => 'mail8A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 8A',
            'beacon_id' => 10,
        ]);
        App\People::create([
            'name' => 'Person 4A',
            'email' => 'mail4A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 4A',
            'beacon_id' => 11,
        ]);
        App\People::create([
            'name' => 'Person 7A',
            'email' => 'mail7A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 7A',
            'beacon_id' => 12,
        ]);
        App\People::create([
            'name' => 'Person 10A',
            'email' => 'mail10A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 10A',
            'beacon_id' => 13,
        ]);
        App\People::create([
            'name' => 'Person 1A',
            'email' => 'mail1A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 1A',
            'beacon_id' => 14,
        ]);
        App\People::create([
            'name' => 'Person 6A',
            'email' => 'mail6A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 6A',
            'beacon_id' => 15,
        ]);
    }
}
