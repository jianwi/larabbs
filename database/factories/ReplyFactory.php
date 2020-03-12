<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Reply::class, function (Faker $faker) {
   $date = $faker->dateTimeThisMonth();

    return [
        // 'name' => $faker->name,
        'content' => $faker->sentence(),
        'created_at' => $date,
        'updated_at' => $date,
    ];
});
