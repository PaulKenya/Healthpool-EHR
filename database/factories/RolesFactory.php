<?php

use Faker\Generator as Faker;

$factory->define(App\roles::class, function (Faker $faker) {
    return [
        'role_name' => $faker->jobTitle,
        'role_description' =>''.$faker->sentence($nbWords = 6, $variableNbWords = true),
        'department_id' =>1
    ];
});
