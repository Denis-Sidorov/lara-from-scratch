<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'content' => $faker->paragraph(3),
        'created_at' => $faker->dateTimeThisMonth,
        'updated_at' => $faker->dateTimeThisMonth,
        'published_at' => $faker->dateTimeThisMonth,
    ];
});
