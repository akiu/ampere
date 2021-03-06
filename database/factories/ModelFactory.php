<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name'              => $faker->name,
        'email'             => $faker->email,
        'password'          => bcrypt('password'),
        'password_last_set' => new Carbon\Carbon(),
        'remember_token'    => str_random(10),
    ];
});

$factory->define(App\Entities\Profile::class, function (Faker\Generator $faker) {
    return [
        'bio'      => $faker->paragraph(),
        'timezone' => $faker->timezone,
    ];
});

$factory->define(App\Entities\Post::class, function (Faker\Generator $faker) {
    return [
        'title'   => $faker->sentence(),
        'content' => $faker->paragraph(10),
    ];
});
