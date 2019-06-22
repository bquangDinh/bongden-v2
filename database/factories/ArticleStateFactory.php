<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ArticleState;
use Faker\Generator as Faker;

$factory->define(ArticleState::class, function (Faker $faker) {
    return [
        'article_id' => $faker->unique()->numberBetween($min = 136, $max = 235),
        'state' => $faker->randomElement($array = array('upload','uploaded','save'))
    ];
});
