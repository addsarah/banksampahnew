<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksampah extends Model
{
    use HasFactory;

    public function Jenissampah()
    {
        return $this->belongsTo(Jenissampah::class);
    }
}
