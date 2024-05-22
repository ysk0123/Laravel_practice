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
        $comments = [
            'テストコメント1',
            'テストコメント2',
            'テストコメント3',
            'テストコメント4',
            'テストコメント5'
        ];

         // 1から5までのランダムな数のコメントを選択
         $randomCount = $this->faker->numberBetween(1, 5);
         $randomComments = $this->faker->randomElements($comments, $randomCount);

         $concatenatedComments = implode('', $randomComments);
        return [
            'title' => 'サンプルブック' . $this->faker->unique()->numberBetween(0,20),
            'author_id' => User::factory()->create()->id,
            'comment' => $concatenatedComments,   
        ];
    }
}
