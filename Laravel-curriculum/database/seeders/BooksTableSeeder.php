<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\User;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author = User::first();

        Book::create(['title' => 'The Great Book', 'author_id' => $author->id]);
        Book::create(['title' => 'Another Book', 'author_id' => $author->id]);
    }
}
