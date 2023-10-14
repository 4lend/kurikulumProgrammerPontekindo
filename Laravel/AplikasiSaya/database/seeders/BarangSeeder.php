<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::insert(
            [
                "nama_barang" => 'bumbu_rendang',
                "letak_barang" => 'kantin',
                "harga" => 3999,
                "jumlah_barang" => 5,
                "tgl_pengadaan" => '2022-12-02',
                "status" => 'ada',

                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        );
    }
}
