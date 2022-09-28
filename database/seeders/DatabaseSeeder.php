<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // quick hack to seed the database
        // it can be more elegant, but it's for testing purpose so....

        ProductCategory::factory()
            ->count(50)
            ->create();
    }
}
