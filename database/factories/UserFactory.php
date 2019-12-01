<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use  App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;




$users = App\Models\User::pluck('id')->toArray();



$factory->define(App\Models\User::class, function (Faker $faker) {
    
    return [
        'user_name' => $faker->name,
        'full_name' => $faker->name,
        'password' => '$2y$10$mXwEFI/nQub9PmCejn59zuozRujElm4bu5D01y.wXpciRnKjHRWNm', // admin
        'email' => Str::random(10). $faker->email,
        'role' => $faker->randomElement($array = range (0,1))
    ];
});
$factory->define(App\Models\Brief::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'title' => $faker->name,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'phone' => $faker->e164PhoneNumber,
        'address' =>$faker->address ,
        'facebook' => "www.facebook.com",
        'twitter' => "https://twitter.com/",
        'instagram' => "https://www.instagram.com/",
        
        
    ];
});
$factory->define(App\Models\Country::class, function (Faker $faker) {
    global $users;
    return [
        'name' => $faker->name,
        'user_id' =>$faker->randomElement(  $users) ,
    ];
});
$factory->define(App\Models\Governorate::class, function (Faker $faker) {
    global $users;
    $countries = App\Models\Country::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'country_id' => $faker->randomElement(  $countries),
        'user_id' =>$faker->randomElement(  $users) ,
    ];
});
$factory->define(App\Models\City::class, function (Faker $faker) {
    global $users;
    $governorates = App\Models\Governorate::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'governorate_id' => $faker->randomElement(  $governorates),
        'user_id' =>$faker->randomElement(  $users) ,
    ];
});





