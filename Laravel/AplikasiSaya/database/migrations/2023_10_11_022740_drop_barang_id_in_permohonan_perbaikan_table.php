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
            $table->dropColumn('barang_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permohonan_perbaikan', function (Blueprint $table) {
            $table->integer('barang_id')->after('permohonan_perbaikan_id');
        });
    }
};
