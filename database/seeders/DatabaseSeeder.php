<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            PeriksasTableSeeder::class,
            ObatsTableSeeder::class,
            DetailPeriksas::class,
        ]);

        
    }
}
