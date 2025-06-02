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
        Schema::table('table_pembayaran_kamar', function (Blueprint $table) {
            $table->string('bukti_pembayaran')->nullable()->after('tanggal_bayar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_pembayaran_kamar', function (Blueprint $table) {
            $table->dropColumn('bukti_pembayaran');
        });
    }
};
