<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use App\Models\Model;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'Name' => $faker->name(),
        'Price' => $faker->randomNumber(5),
        'Quantity' => $faker->randomDigit,
        'Image' => 'null',
        'Category'=> '1',
        'user_id' => '2',
        // 'image' => $faker->image('public/storage/images',640,480, 'cats'),
    ];
});
