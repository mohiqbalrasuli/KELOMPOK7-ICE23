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
        Schema::create('table_pesanan_menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('menu_id')->constrained('table_menu')->onDelete('cascade');
            $table->integer('jumlah');
            $table->decimal('total_harga', 10, 2);
            $table->integer('kursi');
            $table->enum('status', ['menunggu', 'konfirmasi', 'selesai'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pesanan_menu');
    }
};
