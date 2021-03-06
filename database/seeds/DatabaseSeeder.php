<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(CoachesTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(WorkoutsTableSeeder::class);
        $this->call(TrainingsTableSeeder::class);
        $this->call(MembershipsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
