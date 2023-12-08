<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['id_kasir', 'id_pelanggan', 'kembalian', 'tipe_pembayaran', 'tanggal', 'uang_di_bayar', 'jumlah_barang'];

    public function kasir(): BelongsTo
    {
        return $this->BelongsTo(Kasir::class, 'id_kasir');
    }
    public function pelanggan(): BelongsTo
    {
        return $this->BelongsTo(Pelanggan::class, 'id_pelanggan');
    }
}
