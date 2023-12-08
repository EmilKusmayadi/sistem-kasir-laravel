<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $fillable = ['nama_pelanggan', 'alamat'];
    public function Transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }
}
