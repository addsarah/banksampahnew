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
        Schema::create('pengemudis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengemudi',100);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('email_pengemudi')->unique();
            $table->string('nomor_telepon');
            $table->date('tanggal_lahir');
            $table->string('alamat',200);
            $table->enum('jenis_kendaraan', ['motor', 'mobil']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengemudis');
    }
};
