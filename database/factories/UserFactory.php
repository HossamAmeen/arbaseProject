<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;




$users = App\Model\User::pluck('id')->toArray();



$factory->define(App\Model\User::class, function (Faker $faker) {
    
    return [
        'user_name' => $faker->name,
        'full_name' => $faker->name,
        'password' => '$2y$10$mXwEFI/nQub9PmCejn59zuozRujElm4bu5D01y.wXpciRnKjHRWNm', // admin
        'email' => Str::random(10). $faker->email,
        'role' => $faker->randomElement($array = range (0,1))
    ];
});
$factory->define(App\Model\Bref::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'title' => $faker->name,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'phone' => $faker->e164PhoneNumber,
        'address' =>$faker->address ,
        'facecbook' => "www.facebook.com",
        'twitter' => "https://twitter.com/",
        'instagram' => "https://www.instagram.com/",
        
        
    ];
});
$factory->define(App\Model\Country::class, function (Faker $faker) {
    global $users;
    return [
        'name' => $faker->name,
        'user_id' =>$faker->randomElement(  $users) ,
    ];
});
$factory->define(App\Model\Governorate::class, function (Faker $faker) {
    global $users;
    $countries = App\Model\Country::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'country_id' => $faker->randomElement(  $countries),
        'user_id' =>$faker->randomElement(  $users) ,
    ];
});
$factory->define(App\Model\City::class, function (Faker $faker) {
    global $users;
    $governorates = App\Model\Governorate::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'governorate_id' => $faker->randomElement(  $governorates),
        'user_id' =>$faker->randomElement(  $users) ,
    ];
});





