<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Videogame;
use Faker\Generator as Faker;

$factory->define(Videogame::class, function (Faker $faker) {
    return [
        'titolo'=> $faker -> word(),
        'sottoTitolo'=> $faker -> word(),
        'rating'=> $faker -> numberBetween(0,5),
    ];
});
