<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AuthorsTableSeeder::class,
            BorrowersTableSeeder::class,
            PublishersTableSeeder::class,
            PublisherAddressesTableSeeder::class,
            GenresTableSeeder::class,
            BooksTableSeeder::class,
            TransactionsTableSeeder::class,
        ]);
    }
}
