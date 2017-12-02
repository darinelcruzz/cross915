<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 19; $i++) {
            factory(App\Schedule::class)->create([
                'hour' => $i + 5 . ":00",
                'monday' => $i,
                'tuesday' => $i + 18,
                'wednesday' => $i + 36,
                'thursday' => $i + 54,
                'friday' => $i + 72,
                //'saturday' => $i + 90,
                //'sunday' => $i + 108,
            ]);
        }
    }
}
