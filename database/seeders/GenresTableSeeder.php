<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => 'Genre One', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Genre Two', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
