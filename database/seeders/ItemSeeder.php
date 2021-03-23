<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Items;
use Illuminate\Support\Str;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=10;$i++){
            $item=Items::create([
                "name"=>Str::random(15,30),
                "count"=>rand(0,20),
            ]);
            $item->save();
        }
    }
}
