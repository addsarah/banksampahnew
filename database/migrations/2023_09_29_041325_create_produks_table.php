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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama',30);
            $table->string('gambar',30);
            $table->integer('harga');
            $table->integer('stok');
            $table->enum('jenis', ['organik', 'kertas', 'plastik', 'elektronik', 'kaca',]);
            $table->string('satuan_hitung',30);
            $table->string('deskripsi',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
