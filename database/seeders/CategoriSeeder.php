<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'nama_kategori' => 'Kerajinan Tangan',
                'slug' => Str::slug('Kerajinan Tangan', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Dekorasi Rumah',
                'slug' => Str::slug('Dekorasi Rumah', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Aksesoris',
                'slug' => Str::slug('Aksesoris', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Peralatan DIY',
                'slug' => Str::slug('Peralatan DIY', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Tutorial DIY',
                'slug' => Str::slug('Tutorial DIY', '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
