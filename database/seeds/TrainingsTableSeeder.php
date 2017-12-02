<?php

use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Training::class, 18)->create([
            'weekday'=> 'lun',
        ]);
        factory(App\Training::class, 18)->create([
            'weekday'=> 'mar',
        ]);
        factory(App\Training::class, 18)->create([
            'weekday'=> 'mie',
        ]);
        factory(App\Training::class, 18)->create([
            'weekday'=> 'jue',
        ]);
        factory(App\Training::class, 18)->create([
            'weekday'=> 'vie',
        ]);
    }
}
