<?php

use Faker\Generator as Faker;
use App\User;
use App\Company;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt($faker->password),
        'companies_id' => function () {
            return factory(Company::class)->create()->companies_id;
        },
    ];
});
