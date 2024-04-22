<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'pembeli' => 'Admin',
                'penjualan_kode' => 'AAA',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Admin',
                'penjualan_kode' => 'AAB',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Admin',
                'penjualan_kode' => 'AAC',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Admin',
                'penjualan_kode' => 'AAD',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Admin',
                'penjualan_kode' => 'AAD',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Manager',
                'penjualan_kode' => 'AAE',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Manager',
                'penjualan_kode' => 'AAF',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Manager',
                'penjualan_kode' => 'AAG',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Staff',
                'penjualan_kode' => 'AAH',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Staff',
                'penjualan_kode' => 'AAI',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
