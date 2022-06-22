<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_depan_pengguna' => $this->faker->name(),
            'nama_belakang_pengguna' => $this->faker->name(),
            'email_pengguna' => $this->faker->unique()->safeEmail(),
            'nomor_pengguna' => $this->faker->numberBetween($min = 111, $max = 22323),
            'alamat_pengguna' => $this->faker->address,
            'password_pengguna' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'slug_pengguna' => Str::random(10),
            'role_id' => $this->faker->numberBetween($min = 1, $max = 2),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
