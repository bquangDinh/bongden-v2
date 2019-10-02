<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentences($nd=1,$asText=true),
        'cover_url' => $faker->imageUrl($width = 640, $height = 480),
        'subject_id' => $faker->numberBetween($min = 1, $max = 100),
        'content' => $faker->paragraphs($nb = 10, $asText = true),
        'user_id' => 2
    ];
});
