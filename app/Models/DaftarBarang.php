<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DaftarBarang extends Model
{
    use HasFactory;
    protected $table = "daftar_barang";
    protected $fillable = ['id_kategori', 'nama_barang', 'lokasi_rak'];


    public function kategori(): BelongsTo
    {
        return $this->BelongsTo(kategori::class, 'id_kategori');
    }
}
