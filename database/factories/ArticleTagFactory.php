<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ArticleTag;
use Faker\Generator as Faker;

$factory->define(ArticleTag::class, function (Faker $faker) {
    return [
        'article_id' => $faker->unique()->numberBetween($min = 136,$max = 235),
        'tag_id' => $faker->numberBetween($min = 102, $max = 202)
    ];
});
