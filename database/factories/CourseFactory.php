<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'cover' => fake()->imageUrl(640, 480, 'education'),
            'content' => fake()->paragraphs(3, true),
            'robotics_kit_id' => fake()->numberBetween(1, 3)
        ];
    }
}