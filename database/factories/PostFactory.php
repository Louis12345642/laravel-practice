<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'=>category::factory(),
            'author_id'=>User::factory(),
            'title' => $this->faker->sentence(),
            'slug' =>$this->faker->slug(),
            'excert'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
            'author'=>$this->faker->word()
        ];
    }
}
