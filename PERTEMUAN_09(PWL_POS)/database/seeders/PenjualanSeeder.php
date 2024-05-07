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
        $user_id = 3;

        // Data penjualan
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli A',
                'penjualan_kode' => 'ABC123',
                'penjualan_tanggal' => '2024-03-01',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli B',
                'penjualan_kode' => 'DEF456',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli C',
                'penjualan_kode' => 'GHI789',
                'penjualan_tanggal' => '2024-03-03',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli D',
                'penjualan_kode' => 'JKL012',
                'penjualan_tanggal' => '2024-03-04',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli E',
                'penjualan_kode' => 'MNO345',
                'penjualan_tanggal' => '2024-03-05',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli F',
                'penjualan_kode' => 'PQR678',
                'penjualan_tanggal' => '2024-03-06',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli G',
                'penjualan_kode' => 'STU901',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli H',
                'penjualan_kode' => 'VWX234',
                'penjualan_tanggal' => '2024-03-08',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli I',
                'penjualan_kode' => 'YZA567',
                'penjualan_tanggal' => '2024-03-09',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => $user_id,
                'pembeli' => 'Pembeli J',
                'penjualan_kode' => 'BCD890',
                'penjualan_tanggal' => '2024-03-10',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
