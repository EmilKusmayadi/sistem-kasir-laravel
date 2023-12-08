<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kasir extends Model
{
    use HasFactory;
    protected $table = "kasir";
    protected $fillable = ['nama_kasir'];

    public function Transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }
}
