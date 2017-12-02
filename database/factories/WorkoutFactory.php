<?php

use Faker\Generator as Faker;

$factory->define(App\Workout::class, function (Faker $faker) {
    $types = ['AMRAP', 'EMOM', 'FOR TIME', 'MAX'];

    $markdown = <<<EOD
## {$faker->firstName}
***

- {$faker->randomNumber(2)} squats.
- {$faker->randomNumber(2)} planks.
- {$faker->randomNumber(2)} pull-ups.

EOD;

    return [
        'name' => $faker->firstNameMale,
        'description' => $markdown,
        'duration' => $faker->numberBetween(1, 25),
        'difficulty' => $faker->numberBetween(1, 5),
        'type' => $faker->randomElement($types),
        'priority' => 0,
        'date' => $faker->date,
        'week' => 49,
    ];
});
