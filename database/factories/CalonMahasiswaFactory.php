<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CalonMahasiswa>
 */
class CalonMahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jurusan_id' => mt_rand(1,5),
            'nama' => $this->faker->sentence(mt_rand(1,2)),
            'asal_sekolah' => $this->faker->sentence(mt_rand(1,2)),
            'nilai_test' => $this->faker->numberBetween(0, 100),
        ];
    }
}
