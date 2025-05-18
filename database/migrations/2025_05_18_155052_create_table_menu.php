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
        Schema::create('table_menu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->decimal('harga',10,2);
            $table->foreignId('kategori_menu_id')->constrained('table_kategori_menu')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_menu');
    }
};
