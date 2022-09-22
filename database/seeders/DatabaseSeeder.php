<?php


namespace Database\Seeders;
use \App\Models\User;
use \App\Models\category;
use \App\Models\Post;
use \App\Models\Students;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::truncate();
        category::truncate();
        User::factory(10)->create();
        Post::factory(10)->create();
        Students::factory(10)->create();

    }
}
