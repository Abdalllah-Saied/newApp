<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('authors')->insert([
            ['name' => 'Author One', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author Two', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
