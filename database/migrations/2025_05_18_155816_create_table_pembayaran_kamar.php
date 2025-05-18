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
        Schema::create('table_pembayaran_kamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('pesanan_kamar_id')->constrained('table_pesanan_kamar')->onDelete('cascade');
            $table->foreignId('metode_pembayaran_id')->constrained('table_metode_pembayaran')->onDelete('cascade');
            $table->foreignId('kamar_id')->constrained('table_kamar')->onDelete('cascade');
            $table->decimal('total_harga', 10, 2);
            $table->date('tanggal_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pembayaran_kamar');
    }
};
