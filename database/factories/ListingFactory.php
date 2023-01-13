<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->sentence(),
            'tags' => 'laravel, api, backend',
            "family" => $this->faker->company(),
            "vernacular" => $this->faker->sentence(),
            "use" => $this->faker->sentence(),
            "wikipedia" => $this->faker->url(),
            "description" => $this->faker->paragraph(5),
        ];
    }
}
