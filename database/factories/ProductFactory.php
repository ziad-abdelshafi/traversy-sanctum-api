<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        $slug = Str::slug($name, '-');
        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
