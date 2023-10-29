<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangElektronik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_elektronik',
        'gambar',
        'harga_elektronik',
        'satuan_hitung',
        'deskripsi',
    ];
}
