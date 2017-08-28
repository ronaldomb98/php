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
use App\Hobbie;
use App\Student;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10)
    ];
});

$factory->define(Hobbie::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->sentence(4)
    ];
}); 

$factory->define(Student::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->name,
        'address' => $faker->address
    ];
});

$factory->define(App\Student_Hobbie::class, function (Faker\Generator $faker) {
    return [
        'comment' => $faker->sentence,
        'hobbie_id' => Hobbie::all()->random()->id,
        'student_id' => Student::all()->random()->id
    ];
});