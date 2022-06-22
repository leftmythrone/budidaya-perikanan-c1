<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'deskripsi_pengeluaran' => $this->faker->sentence(mt_rand(1,2)),
            'tanggal_pengeluaran' => $this->faker->dateTimeThisMonth(),   
            'nominal_pengeluaran' => $this->faker->numberBetween($min = 999, $max = 99999),
            'slug_pengeluaran' => $this->faker->numberBetween($min = 999999, $max = 99999999),
        ];
    }
}
