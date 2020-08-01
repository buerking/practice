<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,

        'author_id'=>rand(1,100)
    ];
});
