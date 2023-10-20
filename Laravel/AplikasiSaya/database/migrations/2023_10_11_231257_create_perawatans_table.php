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
        Schema::create('perawatans', function (Blueprint $table) {
            $table->id('perawatan_id')->bigInteger(20);
            $table->integer('poliklinik_id')->length(11);
            $table->string('nama_perawatan',80);
            $table->double('bagian_rs');
            $table->double('bhp');
            $table->double('tarif_perujuk');
            $table->double('tarif_tindakan_dokter');
            $table->double('tarif_tindakan_petugas');
            $table->double('kso');
            $table->double('menejemen');
            $table->double('total_biaya');
            $table->char('kode_pj', 3);
            $table->enum('status', ['0','1']);
            $table->enum('kelas', ['-','Rawat Jalan','Kelas 1','Kelas 2','Kelas 3','Kelas Utama','Kelas VIP','Kelas VVIP']);
            $table->enum('kategori', ['PK','PA','MB']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawatans');
    }
};
