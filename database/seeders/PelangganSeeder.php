<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggan')->insert([
            'nama_pelanggan' => 'emil',
            'alamat' => 'leange'
        ]);
        DB::table('pelanggan')->insert([
            'nama_pelanggan' => 'sahid',
            'alamat' => 'salebbo'
        ]);
        DB::table('pelanggan')->insert([
            'nama_pelanggan' => 'arya',
            'alamat' => 'samalewa'
        ]);
    }
}
