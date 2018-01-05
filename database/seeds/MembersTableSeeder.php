<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Member::class, 5)->create()->each(function ($member) {
            /*App\User::create([
                'name' => $member->name,
                'email' => $member->id,
                'password' => Hash::make($member->birthdate),
                'level' => 3
            ]);*/
        });
    }
}
