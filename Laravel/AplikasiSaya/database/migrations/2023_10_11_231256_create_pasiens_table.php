<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id('pasied_id')->bigInteger;
            $table->integer('user_id');
            $table->string('nama_pasien', 40);
            $table->string('nik', 20);
            $table->string('image', 40)->default('default_image.jpg');
            $table->enum('jk', ['L', 'P']);
            $table->string('tmp_lahir', 15);
            $table->date('tgl_lahir');
            $table->string('nm_ibu', 40);
            $table->string('alamat', 200);
            $table->enum('gol_darah', ['A','B','O','AB','-']);
            $table->string('pekerjaan', 60);
            $table->enum('status_nikah', ['belum menikah','menikah']);
            $table->string('agama', 12);
            $table->date('tgl_daftar');
            $table->string('no_tlp', 40);
            $table->string('umur', 30);
            $table->enum('pnd', ['TS','TK','SD','SMP','SMA','SLTA/SEDERAJAT','D1','D2','D3','D4','S1','S2','S3','-']);
            $table->enum('keluarga', ['AYAH','IBU','ISTRI','SUAMI','SAUDARA','ANAK']);
            $table->string('penjamin', 100);
            $table->string('no_peserta', 25);
            $table->integer('kd_kelurahan');
            $table->integer('kd_kec');
            $table->integer('kd_kab');
            $table->string('pekerjaanpj', 35);
            $table->string('alamatpj', 100);
            $table->string('kelurahanpj', 60);
            $table->string('kecamatanpj', 60);
            $table->string('kabupatenpj', 60);
            $table->string('perusahaan_pasien', 60);
            $table->integer('suku_bangsa');
            $table->integer('bahasa_pasien');
            $table->integer('cacat_fisik');
            $table->string('email', 50);
            $table->string('nip', 30);
            $table->integer('kd_prop');
            $table->string('propinsipj', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
