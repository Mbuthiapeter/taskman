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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'group' => App\Group::all()->random()->name,
        'password' => $password = 'secret',
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Task::class, function (Faker\Generator $faker) {
	$unixtimestamp = 1526098800;
    return [
        'name' => $faker->paragraph(1),
        'description' => $faker->paragraph(3),
        'category' => App\Category::all()->random()->name,
        'assigned_to' => App\User::all()->random()->name,
        'scope' => App\Scope::all()->random()->name,
        'group' => App\Group::all()->random()->name,
        'priority' => App\Priority::all()->random()->name,
        'due_date' => $faker->date('now', $unixtimestamp),
        'user_id' => App\User::all()->random()->id,


    ];
});


