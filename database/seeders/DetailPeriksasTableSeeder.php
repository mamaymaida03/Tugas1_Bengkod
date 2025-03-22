<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPeriksasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_periksas')->insert([
            [
                'id_periksa' => 3,  
                'id_obat' => 4,  
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],
            [
                'id_periksa' => 4,
                'id_obat' => 5,
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],
            [
                'id_periksa' => 5,
                'id_obat' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);        
    }
}