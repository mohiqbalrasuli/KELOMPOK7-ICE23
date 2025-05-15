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
        Schema::create('table_kategori_kamar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
            $table->string('deskripsi',500);
            $table->integer('kapasitas');
            $table->decimal('harga',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_kategori_kamar');
    }
};
