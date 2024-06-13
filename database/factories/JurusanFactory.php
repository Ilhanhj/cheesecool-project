<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jurusan>
 */
class JurusanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->sentence(mt_rand(1,2)),
            'akreditasi' => $this->faker->sentence(mt_rand(1,2)),
            'deskripsi' => $this->faker->sentence(mt_rand(4,9)),
            'jenjang' => $this->faker->sentence(mt_rand(1,2)),
        ];
    }
}
