<?php

use Faker\Generator as Faker;

$factory->define(App\Sale::class, function (Faker $faker) {
    return [
        'client' => 1,
        'p1' => 1,
        'q1' => 1,
        'a1' => 1,
        'total' => 100,
        'credit' => 0,
        'status' => 1,
        'paid' => '2018-01-11',
    ];
});
