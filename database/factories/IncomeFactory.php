<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'deskripsi_pemasukan' => $this->faker->sentence(mt_rand(1,2)),
            'tanggal_pemasukan' => $this->faker->dateTimeThisMonth(),   
            'nominal_pemasukan' => $this->faker->numberBetween($min = 999, $max = 99999),
            'slug_pemasukan' => $this->faker->numberBetween($min = 999999, $max = 99999999),
        ];
    }
}
