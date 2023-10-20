<?php

use Brick\Math\Bigstring;
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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id('pegawai_id')->bigstring();
            $table->string('user_id');
            $table->string('nik', 20)->nullable();
            $table->string('nama_pegawai', 50);
            $table->enum('jenis_kelamin', ['Pria','Wanita']);
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->string('image', 500);
            $table->string('alamat');
            $table->enum('golongan_darah',['A','B','O','AB','-']);
            $table->string('agama', 12);
            $table->string('no_telp', 13)->nullable();
            $table->string('email', 255);
            $table->enum('status_nikah',['BELUM MENIKAH','MENIKAH','JANDA','DUDA','JOMBLO']);
            $table->string('pendidikan_terakhir', 80);
            $table->string('alumni', 60);
            $table->string('bank', 50);
            $table->string('rekening');
            $table->string('status_wajib_pajak', 5);
            $table->string('status_kerja', 3);
            $table->bigInteger('npwp')->nullable();
            $table->enum('status_aktif',['AKTIF','CUTI','KELUAR','TENAGA LUAR']);
            $table->string('gaji_pokok');
            $table->string('departemen_id', 4);
            $table->string('bidang', 15);
            $table->string('jabatan');
            $table->string('jenjang_jabatan', 25);
            $table->string('kode_kelompok', 3);
            $table->string('kode_resiko', 3);
            $table->string('kode_emergency', 3);
            $table->date('mulai_kontrak');
            $table->date('mulai_kerja');
            $table->enum('masa_kerja', ['<1','PT','FT>1']);
            $table->string('indexins');
            $table->string('wajibmasuk')->nullable();
            $table->string('pengurang')->nullable();
            $table->string('indek')->nullable();
            $table->string('cuti_diambil')->nullable();
            $table->string('dankes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
