<?php

use App\User;

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'confirmed' => true,
        'confirmation_code' => $faker->md5,
        'ip' => $faker->ipv4,
        'banned_at' => null,
        'type' => User::DEFAULT,
        'phone' => '13210086',
    ];
});

$factory->state(User::class, 'passwordless', function () {
    return [
        'password' => '',
    ];
});
