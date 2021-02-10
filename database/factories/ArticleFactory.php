<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id'=>factory(\App\User::class),
        //it will call factory from UserFactory then it wil return a primary key as a user_id here
        'title'=>$faker->sentence,
        'except'=>$faker->sentence,
        'body'=>$faker->paragraph
    ];
});
