<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
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
            'user_id' => $faker->numberBetween(1, 10),
            'nama_pasien' => $faker->name(),
            'nik' => $faker->randomNumber(),
            // 'nik' => $faker->randomNumber(16),
            // 'image' => $faker->imageUrl(),
            'jk' => $faker->randomElement(['L', 'P']),
            // 'tmp_lahir' => $faker->address(),
            'tmp_lahir' => substr($faker->text(20), 0, 15),
            'tgl_lahir' => $faker->dateTime()->format('Y-m-d'),
            'nm_ibu' => $faker->name('female'),
            'alamat' => $faker->address(),
            'gol_darah' => $faker->randomElement(['A', 'B', 'O', 'AB', '-']),
            'pekerjaan' => $faker->jobTitle(),
            'status_nikah' => $faker->randomElement(['belum menikah', 'menikah']),
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya']),
            'tgl_daftar' => $faker->dateTime(),
            'no_tlp' => $faker->phoneNumber(),
            'umur' => $faker->numberBetween(18, 65),
            'pnd' => $faker->randomElement(['TS', 'TK', 'SD', 'SMP', 'SMA', 'SLTA/SEDERAJAT', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3', '-']),
            'keluarga' => $faker->randomElement(['AYAH', 'IBU', 'ISTRI', 'SUAMI', 'SAUDARA', 'ANAK']),
            'penjamin' => $faker->name(),
            'no_peserta' => $faker->numberBetween(1, 25),
            'kd_kelurahan' => $faker->unique->numberBetween(1, 8506),
            'kd_kec' => $faker->numberBetween(1,7266),
            'kd_kab' => $faker->numberBetween(1,416),
            // 'pekerjaanpj' => $faker->substr($faker->text(50), 0, 35),
            'pekerjaanpj' => substr($faker->text(50), 0, 35),
            'alamatpj' => $faker->address(),
            'kelurahanpj' => $faker->city(),
            'kecamatanpj' => $faker->state(),
            'kabupatenpj' => $faker->city(),
            'perusahaan_pasien' => $faker->company(),
            'suku_bangsa' => $faker->numberBetween(1,1340),
            'bahasa_pasien' => $faker->numberBetween(715),
            'cacat_fisik' => $faker->numberBetween(1,10),
            'email' => $faker->email(),
            'nip' => $faker->numberBetween(100000000000000000, 999999999999999999),
            'kd_prop' => $faker->numberBetween(1 - 38),
            'propinsipj' => $faker->state,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ];
    }
}
