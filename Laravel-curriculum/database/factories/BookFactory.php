<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;
    
     public function definition(): array
    {
        return [
            'title' => $this ->faker->sentence,

            'author_id' => User::factory(),
            'comment' => $this->faker->sentence(10),
            
        ];
    }
}
