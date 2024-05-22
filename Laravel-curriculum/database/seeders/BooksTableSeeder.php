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
        
        $users = User::factory(10)->create();

        foreach ($users as $user) {

        Book::factory(random_int(0,3))->create([
                'author_id' => $user->id,
            ]);
            
        }

        Book::factory(10 - Book::count())->create();
    }
}
