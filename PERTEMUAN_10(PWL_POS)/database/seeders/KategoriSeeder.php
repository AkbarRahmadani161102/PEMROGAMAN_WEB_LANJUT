<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'EL',
                'kategori_nama' => 'Elektronik',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'FA',
                'kategori_nama' => 'Fashion',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'BO',
                'kategori_nama' => 'Books',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'FO',
                'kategori_nama' => 'Furniture',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'TO',
                'kategori_nama' => 'Toys',
            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
