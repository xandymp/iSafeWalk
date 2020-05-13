<?php

use Illuminate\Database\Seeder;

class RouterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Router::create([
            'name' => 'Router 01',
            'serial' => '0123456789',
        ]);

        App\Router::create([
            'name' => 'Router 02',
            'serial' => '0123123123',
        ]);

        App\Router::create([
            'name' => 'Router 03',
            'serial' => '0123123456',
        ]);

        App\Router::create([
            'name' => 'Router 04',
            'serial' => '0123789456',
        ]);

        App\Router::create([
            'name' => 'Router 05',
            'serial' => '4567898654',
        ]);

        App\Router::create([
            'name' => 'Router 06',
            'serial' => '6743482909',
        ]);

        App\Router::create([
            'name' => 'Router 07',
            'serial' => '7573825823',
        ]);

        App\Router::create([
            'name' => 'Router 08',
            'serial' => '5728291098',
        ]);

        App\Router::create([
            'name' => 'Router 09',
            'serial' => '5826582099',
        ]);

        App\Router::create([
            'name' => 'Router 10',
            'serial' => '0947682649',
        ]);

        App\Router::create([
            'name' => 'Router 11',
            'serial' => '8576246261',
        ]);
    }
}
