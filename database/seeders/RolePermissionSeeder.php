<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'tambah-tulisan', 'edit-tulisan', 'hapus-tulisan', 'lihat-tulisan',
            'tambah-kasir', 'edit-kasir', 'hapus-kasir', 'lihat-kasir',
            'tambah-users', 'edit-users', 'hapus-users', 'lihat-users',
        ];

        foreach ($permissions as $permission) {
            if (!Permission::where('name', $permission)->where('guard_name', 'web')->exists()) {
                Permission::create(['name' => $permission, 'guard_name' => 'web']);
            }
        }

        $roles = ['penulis','kasir','users'];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }


        $rolePenulis = Role::findByName('penulis');
        $rolePenulis->syncPermissions(['tambah-tulisan', 'edit-tulisan', 'hapus-tulisan', 'lihat-tulisan']);

        $rolePenulis = Role::findByName('kasir');
        $rolePenulis->syncPermissions(['tambah-kasir', 'edit-kasir', 'hapus-kasir', 'lihat-kasir']);

        $rolePenulis = Role::findByName('users');
        $rolePenulis->syncPermissions(['tambah-users', 'edit-users', 'hapus-users', 'lihat-users']);
    }
}
