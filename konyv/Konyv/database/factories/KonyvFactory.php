<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Konyv>
 */
class KonyvFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cim' => fake('hu_HU')->realText(32),
            'szerzo' => fake('hu_HU')->name(),
            'leiras' => fake('hu_HU')->realText(),
            'kiadas' => fake()->date(),
            'kiado' =>fake('hu_HU')->sentence(),
        ];
    }
}
