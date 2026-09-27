<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriList = [
            ['ket_kategori' => 'Kebersihan'],
            ['ket_kategori' => 'Fasilitas Kelas'],
            ['ket_kategori' => 'Sarana & Prasarana'],
            ['ket_kategori' => 'Keamanan & Ketertiban'],
            ['ket_kategori' => 'Kegiatan Ekstrakurikuler'],
        ];

        foreach ($kategoriList as $kategori) {
            kategori::firstOrCreate($kategori);
        }
    }
}
