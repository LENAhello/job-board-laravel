<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'salary' => $this->faker->numberBetween(30000, 120000),
            'is_remote' => $this->faker->boolean(40),
            'description' => $this->faker->paragraph(4),
            'posted_at' => $this->faker->dateTimeBetween('-3 months', 'now'),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
