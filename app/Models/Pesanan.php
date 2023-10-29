<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_nasabah',
        'id_produk',
        'jumlah',
        'total_harga',
        'alamat_jemput',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'id_nasabah');
    }
}