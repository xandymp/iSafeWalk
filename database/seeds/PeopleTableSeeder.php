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
            'name' => 'Person 01',
            'email' => 'mail01@mail.com',
            'status' => 0,
            'birth_date' => '1990-01-01',
            'job_title' => 'Job 01',
            'device_id' => 1,
        ]);

        App\People::create([
            'name' => 'Person 02',
            'email' => 'mail02@mail.com',
            'status' => 1,
            'birth_date' => '1991-01-01',
            'device_id' => 2,
        ]);

        App\People::create([
            'name' => 'Person 03',
            'email' => 'mail03@mail.com',
            'status' => 2,
            'birth_date' => '1992-01-01',
            'job_title' => 'Job 03',
            'device_id' => 3,
        ]);

        App\People::create([
            'name' => 'Person 04',
            'email' => 'mail04@mail.com',
            'status' => 3,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 04',
            'device_id' => 4,
        ]);
    }
}
