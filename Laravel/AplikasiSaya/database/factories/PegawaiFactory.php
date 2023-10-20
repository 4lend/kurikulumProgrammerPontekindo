<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
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
            'user_id' => $faker->numberBetween(1,10),
            'nik' => $faker->numberBetween(100000000000000, 999999999999999),
            'nama_pegawai' => substr($faker->name(60), 0, 50),
            'jenis_kelamin' => $faker->randomElement(['Pria', 'Wanita']),
            'tempat_lahir' => substr($faker->city(), 0, 50),
            'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'alamat' => $faker->address(),
            'image' => $faker->imageUrl(),
            'golongan_darah' => $faker->randomElement(['A','B','O','AB','-']),
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu']),
            // 'no_telp' => substr($faker->phoneNumber(), 0, 13),
            'no_telp' => '081234567890',
            'email' => $faker->email(),
            'status_nikah' => $faker->randomElement(['BELUM MENIKAH','MENIKAH','JANDA','DUDA','JOMBLO']),
            'pendidikan_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA', 'Diploma', 'Sarjana', 'Magister', 'Doktor']),
            'alumni' => $faker->company(),
            'bank' => $faker->randomElement(['Bank Mandiri', 'Bank BRI', 'BCA (Bank Central Asia)', 'BNI (Bank Negara Indonesia)', 'Bank Danamon', 'Bank CIMB Niaga', 'Bank Panin', 'Bank BTPN', 'Bank Permata', 'Bank Maybank Indonesia', 'Bank Mega', 'Bank OCBC NISP', 'Bank HSBC Indonesia', 'Bank DBS Indonesia', 'Bank UOB Indonesia', 'Bank Commonwealth']),
            'rekening' => $faker->randomElement(['Tabungan', 'Giro', 'Deposito', 'Mata Uang Asing', 'Bisnis', 'Pensiun', 'Trust', 'Bersama', 'Online', 'Khusus']),
            'status_wajib_pajak' => $faker->randomElement(['KK', 'HB', 'PH', 'MT', 'NE']),
            'status_kerja' => $faker->randomElement(['Yes', 'No', 'Ya', 'Tdk']),
            'npwp' => $faker->numerify('################'),
            'status_aktif' => $faker->randomElement(['AKTIF','CUTI','KELUAR','TENAGA LUAR']),
            'gaji_pokok' => $faker->numberBetween(1000000, 10000000000),
            'departemen_id' => $faker->numberBetween(1000,5000),
            'bidang' => $faker->randomElement(['Ekonomi', 'Politik', 'Sosial', 'Lingkungan']),
            'jabatan' => $faker->jobTitle(),
            'jenjang_jabatan' => $faker->randomElement(['Karyawan', 'Supervisor', 'Manager', 'Direktur']),
            'kode_kelompok' => $faker->numberBetween(100,300),
            'kode_resiko' => $faker->numberBetween(111,333),
            'kode_emergency' => $faker->randomElement(['110', '113', '115', '117', '119']),
            'mulai_kontrak' => $faker->date(),
            'mulai_kerja' => $faker->date(),
            'masa_kerja' => $faker->randomElement(['<1','PT','FT>1']),
            'indexins' => $faker->randomNumber(4, true),
            'wajibmasuk' => $faker->numberBetween(10000000000, 99999999999),
            'pengurang' => $faker->numerify('############'),
            'indek' => $faker->randomNumber(4),
            'cuti_diambil' => $faker->numberBetween(1,11),
            'dankes' => $faker->numberBetween(0,99999999999),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
