<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Dr. Budi Santoso',
                'email' => 'dokterbudi@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('rahasia123'),
                'alamat' => 'Jl. Diponegoro No. 3, Medan',
                'no_hp' => '081276543210',
                'role' => 'dokter',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Aisyah',
                'email' => 'pasienaisyah@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('rahasia123'),
                'alamat' => 'Jl. Ahmad Yani No. 21, Semarang',
                'no_hp' => '082367891234',
                'role' => 'pasien',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Rudi Hartono',
                'email' => 'dokterrudi@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('rahasia123'),
                'alamat' => 'Jl. Sudirman No. 10, Makassar',
                'no_hp' => '083498765432',
                'role' => 'dokter',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andi Pratama',
                'email' => 'pasienandi@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('rahasia123'),
                'alamat' => 'Jl. Gajah Mada No. 5, Palembang',
                'no_hp' => '084512345678',
                'role' => 'pasien',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Lisa Wijaya',
                'email' => 'dokterlisa@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('rahasia123'),
                'alamat' => 'Jl. Kartini No. 7, Bali',
                'no_hp' => '085678912345',
                'role' => 'dokter',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        
    }
}
