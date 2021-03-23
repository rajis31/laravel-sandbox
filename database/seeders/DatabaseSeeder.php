<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ItemSeeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // Call multiple seeders
       $this->call(ItemSeeder::class);
    }
}
