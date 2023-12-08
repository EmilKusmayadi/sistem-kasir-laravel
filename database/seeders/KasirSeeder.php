<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kasir')->insert([
            'nama_kasir' => 'john',
        ]);
        DB::table('kasir')->insert([
            'nama_kasir' => 'john2',
        ]);
        DB::table('kasir')->insert([
            'nama_kasir' => 'john3',
        ]);
        DB::table('kasir')->insert([
            'nama_kasir' => 'john4',
        ]);
    }
}
