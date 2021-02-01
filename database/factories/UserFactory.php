<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Entities\Admin\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/*
        'firstname'
        'lastname'
        'email'
        'username'
        'password'
        'email_verified_at'
        'start_date'
        'end_date'
        */

$factory->define(User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->word,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'start_date' => ($start = $faker -> dateTimeBetween('-5 years', 'now')), //dateTimeBetween(anos_desdes, anos_hasta)
        'email_verified_at' => $faker -> randomElement([null, ($validated = $faker -> dateTimeBetween($start, 'now'))]),
        'end_date' => $faker -> randomElement(null, [$faker -> dateTimeBetween($validated, 'now')]),
        'remember_token' => Str::random(12),
        'created_by' => 1,
        'updated_by' => 1,
    ];
});
