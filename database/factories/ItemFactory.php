<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis_id' => mt_rand(1, 2),
            'kondisi_id' => mt_rand(1, 3),
            'keterangan' => $this->faker->sentence(),
            'kecacatan' => $this->faker->sentence(),
            'jumlah' => $this->faker->numberBetween(1, 20),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
