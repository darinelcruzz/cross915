<?php

use Illuminate\Database\Seeder;

class DiscountsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Discount::class, 1)->create();
    }
}
