<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Admin', 'Kasir', 'Karyawan'];

        foreach ($roles as $role) {
            DB::table('roles')->insertOrIgnore([
                'nama_peran' => $role,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
