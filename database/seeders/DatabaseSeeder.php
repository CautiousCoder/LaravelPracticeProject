<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory()->count(10)->create();
        \App\Models\Product::factory()->count(30)->create();
        \App\Models\Tag::factory()->count(10)->create();
    }
}
