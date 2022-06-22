<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'absen_jadwal' => $this->faker->boolean,
            'keterangan_jadwal' => $this->faker->sentence(mt_rand(1,2)),
            'tanggal_jadwal' => $this->faker->dateTimeThisMonth(),   
            'schedule_category_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'slug_jadwal' => $this->faker->numberBetween($min = 999, $max = 99999),
        ];
    }
}
