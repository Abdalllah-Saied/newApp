<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('publishers')->insert([
            ['name' => 'Publisher One', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Publisher Two', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
