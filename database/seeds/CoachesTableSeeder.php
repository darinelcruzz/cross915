<?php

use Illuminate\Database\Seeder;

class CoachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Coach::class, 1)->create()->each(function ($coach) {
            /*App\User::create([
                'name' => $coach->name,
                'email' => $coach->username,
                'password' => Hash::make($coach->birthdate),
                'level' => 2
            ]);*/
        });
    }
}
