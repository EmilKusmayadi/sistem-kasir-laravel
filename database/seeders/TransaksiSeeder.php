<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi')->insert([
            'id_kasir' => 1,
            'id_pelanggan' => 1,
            'kembalian' => 10.000,
            'tipe_pembayaran' => 'BCA',
            'tanggal' => date('Y-m-d'),
            'uang_di_bayar' => 20.000,
            'jumlah_barang' => 2
        ]);
    }
}
