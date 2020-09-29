<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomMumber = rand(1, 100);
        $cover = "$randomMumber";
        return [
            'author_id' => Author::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->sentence(50),
            'cover' => $cover,
            'qty' => rand(10, 20),


        ];
    }
}
