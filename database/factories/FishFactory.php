<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fish>
 */
class FishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nama_ikan' => $this->faker->sentence(mt_rand(1,2)),
            'foto_ikan' => $this->faker->sentence(mt_rand(1,2)),
            'bobot_ikan' => $this->faker->numberBetween($min = 1, $max = 2),
            'panjang_ikan' => $this->faker->numberBetween($min = 1, $max = 15),
            'keterangan_ikan' => $this->faker->sentence(mt_rand(5,10)),
            'harga_ikan' => $this->faker->numberBetween($min = 1, $max = 15),
            'slug_ikan' => $this->faker->numberBetween($min = 999, $max = 99999),
        ];
    }
}
