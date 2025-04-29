<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'author' => $this->faker->name(),
            'isbn' => $this->faker->numerify('#############'),
            'description' => $this->faker->paragraphs(3, true),
            'category_id' => Category::factory(),
            'published_at' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'cover_image' => null,
        ];
    }
}
