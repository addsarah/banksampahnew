<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
