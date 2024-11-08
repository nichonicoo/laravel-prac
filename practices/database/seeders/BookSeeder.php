<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'name'=> 'books_1',
                'photo' =>'images/books/bk_1.webp',
                'description' => 'descriptions book 1',
                'publish_date' => '2024-1-1',
                'author_id' => 1,
                'genre_id' => 1
            ],
            [
                'name'=> 'books_2',
                'photo' =>'images/books/bk_2.jpeg',
                'description' => 'descriptions book 2',
                'publish_date' => '2024-2-15',
                'author_id' => 2,
                'genre_id' => 1
            ],
            [
                'name'=> 'books_3',
                'photo' =>'images/books/bk_3.webp',
                'description' => 'descriptions book 3',
                'publish_date' => '2024-3-20',
                'author_id' => 3,
                'genre_id' => 1
            ],
            [
                'name'=> 'books_4',
                'photo' =>'images/books/bk_4.jpeg',
                'description' => 'descriptions book 4',
                'publish_date' => '2024-7-20',
                'author_id' => 3,
                'genre_id' => 2
            ],
            [
                'name'=> 'books_5',
                'photo' =>'images/books/bk_5.jpeg',
                'description' => 'descriptions book 5',
                'publish_date' => '2024-10-20',
                'author_id' => 3,
                'genre_id' => 2
            ],
        ];
        DB::table('books')->insert($books);
    }
}
