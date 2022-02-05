<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            'nama_barang' => 'Chocolatos',
            'supplier' => 'Coklat Company',
            'harga' => 10000,
            'stok' => 18,
        ]);
    }
}
