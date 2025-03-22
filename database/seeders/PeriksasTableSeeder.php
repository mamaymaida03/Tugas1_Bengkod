<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periksas')->insert([
            [
                'id_pasien' => 2,
                'id_dokter' => 1,
                'tgl_periksa' => now(),
                'catatan' => 'Pasien mengeluhkan sakit kepala dan kelelahan.',
                'biaya_periksa' => 220000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pasien' => 4,
                'id_dokter' => 3,
                'tgl_periksa' => now()->addDays(1),
                'catatan' => 'Pasien mengalami nyeri sendi, disarankan pemeriksaan lanjutan.',
                'biaya_periksa' => 270000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pasien' => 2,
                'id_dokter' => 5,
                'tgl_periksa' => now()->addDays(2),
                'catatan' => 'Pemeriksaan rutin, tekanan darah normal.',
                'biaya_periksa' => 180000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);        
    }
}
