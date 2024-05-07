<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'EL001',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'EL002',
                'barang_nama' => 'Laptop',
                'harga_beli' => 10000000,
                'harga_jual' => 15000000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'EL003',
                'barang_nama' => 'Kamera',
                'harga_beli' => 3000000,
                'harga_jual' => 4000000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'FO004',
                'barang_nama' => 'Meja',
                'harga_beli' => 2000000,
                'harga_jual' => 3000000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'TO005',
                'barang_nama' => 'Bola',
                'harga_beli' => 500000,
                'harga_jual' => 700000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'EL006',
                'barang_nama' => 'Headset',
                'harga_beli' => 1000000,
                'harga_jual' => 1500000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 1,
                'barang_kode' => 'EL007',
                'barang_nama' => 'Mouse',
                'harga_beli' => 500000,
                'harga_jual' => 700000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 1,
                'barang_kode' => 'EL008',
                'barang_nama' => 'Kamera Digital',
                'harga_beli' => 2000000,
                'harga_jual' => 3000000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'FO009',
                'barang_nama' => 'Kursi',
                'harga_beli' => 10000000,
                'harga_jual' => 1500000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'TO010',
                'barang_nama' => 'Raket',
                'harga_beli' => 300000,
                'harga_jual' => 500000,
            ],
    ];

    DB::table('m_barang')->insert($data);
    }
}
