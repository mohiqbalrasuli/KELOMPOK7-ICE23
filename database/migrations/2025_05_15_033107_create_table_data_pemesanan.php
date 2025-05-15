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
        Schema::create('table_data_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamar_id')->constrained('table_kamar')->onDelete('cascade');
            $table->string('nama_pemesan');
            $table->string('no_telepon');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->decimal('total_harga');
            $table->enum('status', ['menunggu', 'konfirmasi', 'selesai'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data_pemesanan');
    }
};
