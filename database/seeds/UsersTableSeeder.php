<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Lab3',
            'email' => 'admin',
            'level' => '1',
            'password' => Hash::make('helefante')
        ]);
    }
}
