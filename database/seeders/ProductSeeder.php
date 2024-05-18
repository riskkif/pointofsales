<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'nama' => 'Cumi Tepung',
                'harga' => 10000,
                'gambar' => 'cumitepung.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cumi Bakar',
                'harga' => 20000,
                'gambar' => 'cumibakar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cumi Cabe Goreng',
                'harga' => 30000,
                'gambar' => 'cumicabegoreng.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cumi & Kerang',
                'harga' => 30000,
                'gambar' => 'cumikerang.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cah Kailan',
                'harga' => 10000,
                'gambar' => 'cahkailan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Tahu Goreng',
                'harga' => 20000,
                'gambar' => 'tahugoreng.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cah Toge',
                'harga' => 30000,
                'gambar' => 'cahtoge.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sayuran',
                'harga' => 30000,
                'gambar' => 'sayuran.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kerang Bambu',
                'harga' => 10000,
                'gambar' => 'kerangbambu.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kepiting Padang',
                'harga' => 20000,
                'gambar' => 'kepitingpadang.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Gurame Asam',
                'harga' => 30000,
                'gambar' => 'gurameasam.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ikan',
                'harga' => 30000,
                'gambar' => 'ikan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Udang Bakar',
                'harga' => 10000,
                'gambar' => 'udangbakar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Udang Saos',
                'harga' => 20000,
                'gambar' => 'udangsaos.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Udang Mayo',
                'harga' => 30000,
                'gambar' => 'udangmayo.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Minuman',
                'harga' => 30000,
                'gambar' => 'minuman.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Iced Tea',
                'harga' => 10000,
                'gambar' => 'icedtea.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Es Jeruk Nipis',
                'harga' => 20000,
                'gambar' => 'esjeruknipis.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Nasi Putih',
                'harga' => 30000,
                'gambar' => 'nasiputih.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Happy Hour',
                'harga' => 30000,
                'gambar' => 'happyhour.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
