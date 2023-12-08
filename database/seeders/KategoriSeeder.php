<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            'nama_ketegori' => 'minuman'
        ]);
        DB::table('kategori')->insert([
            'nama_ketegori' => 'makanan'
        ]);
        DB::table('kategori')->insert([
            'nama_ketegori' => 'minuman'
        ]);
        DB::table('kategori')->insert([
            'nama_ketegori' => 'makanan'
        ]);
    }
}
