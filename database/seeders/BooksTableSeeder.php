<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Book One',
                'author_id' => 1,
                'publisher_id' => 1,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Book Two',
                'author_id' => 2,
                'publisher_id' => 2,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
