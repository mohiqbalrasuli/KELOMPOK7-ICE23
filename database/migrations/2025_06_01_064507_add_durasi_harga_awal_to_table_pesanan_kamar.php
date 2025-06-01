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
        Schema::table('table_pesanan_kamar', function (Blueprint $table) {
            $table->integer('durasi')->after('tanggal_checkout')->nullable()->comment('Durasi menginap dalam hari');
            $table->decimal('harga_awal', 10, 2)->after('durasi')->nullable()->comment('Harga awal sebelum diskon atau tambahan biaya');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_pesanan_kamar', function (Blueprint $table) {
            $table->dropColumn(['durasi', 'harga_awal']);
        });
    }
};
