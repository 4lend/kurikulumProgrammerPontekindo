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
        Schema::create('permohonan_perbaikan', function (Blueprint $table) {
            $table->id('permohonan_perbaikan_id');
            $table->integer('barang_id');
            $table->integer('pegawai_id');
            $table->date('tgl_permohonan');
            $table->text('deskripsi_kerusakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan_perbaikan');
    }
};
