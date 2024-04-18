<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return[
            'album_name' => fake()->word(),
            'date_released' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'artist_id' => fake()->numberBetween(1,5),
            'genre_id' => fake()->numberBetween(1,5),
        ];
    }
}
