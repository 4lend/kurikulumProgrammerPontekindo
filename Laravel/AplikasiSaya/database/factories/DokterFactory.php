<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'pegawai_id' => $faker->numberBetween(1, 10),
            'kode_spesialis' => $faker->randomNumber(5),
            'no_ijin_praktek' => $faker->unique()->randomNumber(9, [0 - 9]),
            'status' => $faker->randomElement(['0', '1']),
        ];
    }
}
