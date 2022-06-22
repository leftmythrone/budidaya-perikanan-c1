<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'keterangan_riwayat' => $this->faker->sentence(mt_rand(1,2)),
            'tanggal_riwayat' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
