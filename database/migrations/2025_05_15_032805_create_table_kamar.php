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
        Schema::create('table_kamar', function (Blueprint $table) {
            $table->id();
            $table->string('nomer_kamar');
            $table->foreignId('kategori_kamar_id')->constrained('table_kategori_kamar')->onDelete('cascade');
            $table->string('lantai');
            $table->enum('status', ['tersedia', 'terisi', 'maintenance'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_kamar');
    }
};
