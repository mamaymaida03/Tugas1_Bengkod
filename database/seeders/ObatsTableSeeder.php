<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('obats')->insert([
            [
                'nama_obat' => 'Aspirin',
                'kemasan' => 'Strip',
                'harga' => 7000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Dexamethasone',
                'kemasan' => 'Botol',
                'harga' => 28000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Naproxen',
                'kemasan' => 'Box',
                'harga' => 18000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Diphenhydramine',
                'kemasan' => 'Strip',
                'harga' => 12000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Fexofenadine',
                'kemasan' => 'Box',
                'harga' => 22000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Ranitidine',
                'kemasan' => 'Kapsul',
                'harga' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Glimepiride',
                'kemasan' => 'Botol',
                'harga' => 16000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Eucerin',
                'kemasan' => 'Tube',
                'harga' => 110000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Zinc Tablet',
                'kemasan' => 'Botol',
                'harga' => 9000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Amlodipine',
                'kemasan' => 'Strip',
                'harga' => 32000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        
    }
}