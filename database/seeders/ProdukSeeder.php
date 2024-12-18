<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk; 
class ProdukSeeder extends Seeder
{
    public function run()
    {
        $produk = [
            ['nama_produk' => 'Gelang'],
            ['nama_produk' => 'Kalung'],
            ['nama_produk' => 'Tas Kain'],
            ['nama_produk' => 'Lukisan Mini'],
            ['nama_produk' => 'Origami'],
            ['nama_produk' => 'Dreamcatcher'],
            ['nama_produk' => 'Lilin Aromaterapi'],
            ['nama_produk' => 'Sabun Handmade'],
            ['nama_produk' => 'Hiasan Gantung'],
            ['nama_produk' => 'Kartu Ucapan'],
        ];

        foreach ($produk as $item) {
            Produk::create($item);
        }
    }
}
