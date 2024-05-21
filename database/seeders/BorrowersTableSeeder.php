<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BorrowersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('borrowers')->insert([
            ['name' => 'Borrower One', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Borrower Two', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
