<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'book_id' => 1,
                'borrower_id' => 1,
                'borrowed_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 2,
                'borrower_id' => 2,
                'borrowed_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
