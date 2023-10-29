<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengemudi extends Model
{
    use HasFactory;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

  
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'pengemudis'; // Set the table name

    protected $fillable = [
        'nama_pengemudi',
        'jenis_kelamin',
        'email_pengemudi',
        'nomor_telepon',
        'tanggal_lahir',
        'alamat',
        'jenis_kendaraan',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
