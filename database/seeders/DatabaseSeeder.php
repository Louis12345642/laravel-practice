<?php


namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\category::create([
            'name' => 'personal',
            'slug' => 'person',
        ]);
        \App\Models\category::create([
            'name' => 'hobbies',
            'slug' => 'hobiies',
        ]);
        \App\Models\category::create([
            'name' => 'work',
            'slug' => 'work',
        ]);

        \App\Models\Post::create([
            'category_id'=>1,
            'user_id'=>3,
            'title' => 'Works Where You Do',
            'slug' => 'Works-Where-You-Do',
            'excert'=>'Get suggestions from Grammarly while you 
            write in desktop applications and sites across
             the web—as you move between apps, social media,
              documents, messages, and emails.',
            'body'=>'Get suggestions from Grammarly while you write in
             desktop applications and sites across the web—as
             you move between apps, social media, documents, messages, and emails. ',
             'author'=>'kual louis dau Arop and Agoody'

        ]);

        \App\Models\Post::create([
            'category_id'=>2,
            'user_id'=>2,
            'title' => 'Works Where You Do',
            'slug' => 'Works-Where-You-work',
            'excert'=>'Get suggestions from Grammarly while you 
            write in desktop applications and sites across
             the web—as you move between apps, social media,
              documents, messages, and emails.',
            'body'=>'Get suggestions from Grammarly while you write in
             desktop applications and sites across the web—as
             you move between apps, social media, documents, messages, and emails. ',
             'author'=>'kual louis dau'
        
             
        ]);
    }
}
