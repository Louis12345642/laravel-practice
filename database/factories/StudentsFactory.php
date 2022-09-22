<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'First_name' => $this->faker->word(),
            'Second_name' =>$this->faker->word(),
            'index_number'=>$this->faker->word(),
            'section'=>$this->faker->word(),
            //
        ];
    }
}
