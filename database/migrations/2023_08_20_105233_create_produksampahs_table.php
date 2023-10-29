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
        Schema::create('produksampahs', function (Blueprint $table) {
            $table->id(); // Penambahan primary key
            $table->string('nama_produk',30);
            $table->decimal('harga_perkg', 10, 2);
            $table->integer('stok_tersedia');
            $table->string('deskripsi_produk',200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produksampahs');
    }
};
