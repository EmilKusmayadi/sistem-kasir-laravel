<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminEmail = 'admin@gmail.com';
        $penulisEmail = 'penulis@gmail.com';
        $kasirEmail = 'kasir@gmail.com';
        $usersEmail = 'users@gmail.com';

        $existingAdmin = User::where('email', $adminEmail)->first();
        $existingPenulis = User::where('email', $penulisEmail)->first();
        $existingKasir = User::where('email', $kasirEmail)->first();
        $existingUsers = User::where('email', $usersEmail)->first();

        if (!$existingAdmin) {
            $adminUser = User::create([
                'name' => 'admin',
                'email' => $adminEmail,
                'password' => bcrypt('12345678')
            ]);
            $adminUser->assignRole('admin');
        }

        if (!$existingPenulis) {
            $penulisUser = User::create([
                'name' => 'penulis',
                'email' => $penulisEmail,
                'password' => bcrypt('12345678')
            ]);
            $penulisUser->assignRole('penulis');
        }

        if (!$existingKasir) {
            $kasirUser = User::create([
                'name' => 'kasir',
                'email' => $kasirEmail,
                'password' => bcrypt('12345678')
            ]);
            $kasirUser->assignRole('kasir');
        }

        if (!$existingUsers) {
            $usersUser = User::create([
                'name' => 'users',
                'email' => $usersEmail,
                'password' => bcrypt('12345678')
            ]);
            $usersUser->assignRole('users');
        }
    }
}
