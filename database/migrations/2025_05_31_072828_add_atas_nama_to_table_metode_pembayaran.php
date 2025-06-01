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
        Schema::table('table_metode_pembayaran', function (Blueprint $table) {
            $table->string('atas_nama')->nullable()->after('nama_bank'); // sesuaikan posisi jika perlu
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_metode_pembayaran', function (Blueprint $table) {
            $table->dropColumn('atas_nama');
        });
    }
};
