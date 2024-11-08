<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
            'name' => 'Authors 1',
            'photo' => 'images/authors/boy_a.png',
            'birth_date' => '2000-1-20'
            ],
            [
                'name' => 'Authors 2',
                'photo' => 'images/authors/boy_b.png',
                'birth_date' => '2000-2-28'
            ],
            [
                'name' => 'Authors 3',
                'photo' => 'images/authors/boy_c.png',
                'birth_date' => '2000-2-15'
            ],
            ];

            DB::table('authors')->insert($authors);
    }
}
