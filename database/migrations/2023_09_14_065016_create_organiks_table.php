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
        Schema::create('organiks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_organik', 100);
            $table->string('gambar');
            $table->string('harga_organik');
            $table->string('satuan_hitung',20);
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organiks');
    }
};
