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
        $asalSekolah =
            $this->faker->randomElement(['SMA', 'SMK']) .
            ' ' .
            $this->faker->city() .
            ' ' .
            $this->faker->randomNumber(1, 99); // Angka acak dua digit

        return [
            'jurusan_id' => mt_rand(1, 5),
            'nama' => fake()->name(),
            'asal_sekolah' => $asalSekolah,
            'nilai_test' => $this->faker->numberBetween(0, 100),
        ];
    }
}
