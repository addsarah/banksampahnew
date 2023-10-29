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
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_nasabah',70);
            $table->string('email_nasabah')->unique();
            $table->string('nomor_telepon',14);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('alamat',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nasabahs');
    }
};
