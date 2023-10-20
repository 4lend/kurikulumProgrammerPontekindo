<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => 'bumbu_rendang',
            'letak_barang' => 'kantin',
            'harga' => 3999,
            'jumlah_barang' => 5,
            'tgl_pengadaan' => '2022-12-02',
            'status' => 'ada',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
