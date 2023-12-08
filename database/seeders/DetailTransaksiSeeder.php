<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_transaksi')->insert([
            'jumlah_barang' => 12,
        ]);
        DB::table('detail_transaksi')->insert([
            'jumlah_barang' => 10,
        ]);
        DB::table('detail_transaksi')->insert([
            'jumlah_barang' => 15,
        ]);
        DB::table('detail_transaksi')->insert([
            'jumlah_barang' => 3,
        ]);
    }
}
