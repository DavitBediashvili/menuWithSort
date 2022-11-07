<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\menu;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        menu::create([
            'name' => 'Toast',
            'type' => 'burger',
            'order' => 12
        ]
        );
        menu::create([
            'name' => 'Toast Cheese',
            'type' => 'burger',
            'order' => 14
        ]
        );
        menu::create([
            'name' => 'Toast Bacon',
            'type' => 'burger',
            'order' => 16
        ]
        );
        menu::create([
            'name' => 'Pepsi',
            'type' => 'drink',
            'order' => 1
        ]
        );
        menu::create([
            'name' => 'Cola',
            'type' => 'drink',
            'order' => 2
        ]
        );
        menu::create([
            'name' => 'Fanta',
            'type' => 'drink',
            'order' => 3
        ]
        );
        menu::create([
            'name' => '7up',
            'type' => 'drink',
            'order' => 7
        ]
        );
        menu::create([
            'name' => 'Natakhtar',
            'type' => 'drink',
            'order' => 5
        ]
        );
        menu::create([
            'name' => 'Toast Bacon + Cheese',
            'type' => 'burger',
            'order' => 18
        ]
        );
        menu::create([
            'name' => 'Toast Bacon + Potato',
            'type' => 'burger',
            'order' => 22
        ]
        );
    }
}
