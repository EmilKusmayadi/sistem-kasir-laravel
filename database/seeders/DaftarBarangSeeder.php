<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('daftar_barang')->insert([
            'id_kategori' => 1,
            'nama_barang' => 'nabati',
            'lokasi_rak' => 'A1',
        ]);
        DB::table('daftar_barang')->insert([
            'id_kategori' => 2,
            'nama_barang' => 'coklat',
            'lokasi_rak' => 'B5',
        ]);
        DB::table('daftar_barang')->insert([
            'id_kategori' => 3,
            'nama_barang' => 'ale-ale',
            'lokasi_rak' => 'A2',
        ]);
        DB::table('daftar_barang')->insert([
            'id_kategori' => 4,
            'nama_barang' => 'susu',
            'lokasi_rak' => 'B3',
        ]);
    }
}
