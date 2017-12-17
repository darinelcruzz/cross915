<?php

use Faker\Generator as Faker;

$factory->define(App\Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name('female'),
        'gender' => 'F',
        'blood' => 'O+',
        'birthdate' => $faker->date,
        'email' => $faker->safeEmail,
        'cellphone' => $faker->tollFreePhoneNumber,
        'schedule_id' => '8:00',
        'membership_id' => 1,
        'ingress' => '2006-07-05',
    ];
});
