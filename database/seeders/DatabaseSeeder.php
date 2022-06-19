<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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
         User::factory(5)
             ->has(Post::factory(5))
             ->create();

        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}
