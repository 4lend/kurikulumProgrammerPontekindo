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
        Schema::table('permohonan_perbaikan', function (Blueprint $table) {
            $table->unsignedBigInteger('barang_id')->after('permohonan_perbaikan_id');
            $table->foreign('barang_id')
            ->references('barang_id')
            ->on('barang')
            ->constrained(
                table: 'barang', indexName: 'permohonan_perbaikan_barang_fk',
            )
            ->cascadeOnUpdate()
            ->restrDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permohonan_perbaikan', function (Blueprint $table) {
            //
        });
    }
};
