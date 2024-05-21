<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherAddressesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('publisher_addresses')->insert([
            ['publisher_id' => 1, 'address' => 'Address One', 'created_at' => now(), 'updated_at' => now()],
            ['publisher_id' => 2, 'address' => 'Address Two', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
