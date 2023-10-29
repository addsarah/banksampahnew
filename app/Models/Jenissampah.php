<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenissampah extends Model
{
    use HasFactory;

    public function Produksampah()
    {
        return $this->hasMany(Produksampah::class);
    }
}
