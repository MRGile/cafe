<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = DB::table('roles')
            ->where('nama_peran', 'Admin')
            ->first();

        DB::table('users')->insertOrIgnore([
            'name' => 'Admin Kedai Kopi',
            'email' => 'AdminNusantara@gmail.com',
            'password' => Hash::make('Nusantara123'),
            'role_id' => $adminRole?->id,
        ]);
    }
}
