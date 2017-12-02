<?php

use Illuminate\Database\Seeder;

class WorkoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=4; $i < 9; $i++) {
            factory(App\Workout::class)->create([
                'date' => '2017-12-0' . $i,
            ]);
        }

    }
}
