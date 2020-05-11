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
            'horizontal' => 2.5,
            'vertical' => 0,
            'sector_id' => 1,
        ]);

        App\Router::create([
            'name' => 'Router 02',
            'serial' => '0123123123',
            'horizontal' => 0,
            'vertical' => 3,
            'sector_id' => 1,
        ]);

        App\Router::create([
            'name' => 'Router 03',
            'serial' => '0123123456',
            'horizontal' => 0,
            'vertical' => 6,
            'sector_id' => 1,
        ]);

        App\Router::create([
            'name' => 'Router 04',
            'serial' => '0123789456',
            'horizontal' => 2.5,
            'vertical' => 9,
            'sector_id' => 1,
        ]);

        App\Router::create([
            'name' => 'Router 05',
            'serial' => '4567898654',
            'horizontal' => 5,
            'vertical' => 6,
            'sector_id' => 1,
        ]);

        App\Router::create([
            'name' => 'Router 06',
            'serial' => '6743482909',
            'horizontal' => 5,
            'vertical' => 3,
            'sector_id' => 1,
        ]);

        App\Router::create([
            'name' => 'Router 07',
            'serial' => '7573825823',
            'horizontal' => 2.5,
            'vertical' => 0,
            'sector_id' => 2,
        ]);

        App\Router::create([
            'name' => 'Router 08',
            'serial' => '5728291098',
            'horizontal' => 0,
            'vertical' => 2,
            'sector_id' => 2,
        ]);

        App\Router::create([
            'name' => 'Router 09',
            'serial' => '5826582099',
            'horizontal' => 2.5,
            'vertical' => 4,
            'sector_id' => 2,
        ]);

        App\Router::create([
            'name' => 'Router 10',
            'serial' => '0947682649',
            'horizontal' => 0,
            'vertical' => 2.5,
            'sector_id' => 3,
        ]);

        App\Router::create([
            'name' => 'Router 11',
            'serial' => '8576246261',
            'horizontal' => 2.5,
            'vertical' => 5,
            'sector_id' => 3,
        ]);

        App\Router::create([
            'name' => 'Router 12',
            'serial' => '9378367126',
            'horizontal' => 5,
            'vertical' => 3,
            'sector_id' => 2,
        ]);

        App\Router::create([
            'name' => 'Router 13',
            'serial' => '0652847482',
            'horizontal' => 2.5,
            'vertical' => 0,
            'sector_id' => 3,
        ]);

        App\Router::create([
            'name' => 'Router 14',
            'serial' => '8773626365',
            'horizontal' => 5,
            'vertical' => 2,
            'sector_id' => 3,
        ]);
    }
}
