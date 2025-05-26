<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengelolaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $needs = [
            ['name' => 'Makan', 'cost' => 1500000],
            ['name' => 'Transportasi', 'cost' => 500000],
            ['name' => 'Listrik & Air', 'cost' => 300000],
            ['name' => 'Internet', 'cost' => 250000],
            ['name' => 'Belanja Bulanan', 'cost' => 700000],
        ];

        DB::table('pengelolaan')->insert($needs);
    }
}
