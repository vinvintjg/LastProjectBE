<?php

namespace Database\Factories;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Book::class;

    public function definition()
    {
        return [
        'Name' => $this->faker->FirstName,
        'Price' => $this->faker->randomNumber(5),
        'Quantity' => $this->faker->randomDigitNotNull,
        'user_id' => '1',
        'Image' => 'null',
        'Image' => $this->faker->imageUrl('public/storage/images','cats', true, 'Faker') // 'http://lorempixel.com/800/400/cats/Faker'

        ];
    }
}
