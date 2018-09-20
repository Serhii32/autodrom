<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'short_description' => $faker->paragraph(3, true),
        'description' => $faker->paragraph(10, true),
        'category_id' => $faker->biasedNumberBetween(1, 15),
    ];
});
