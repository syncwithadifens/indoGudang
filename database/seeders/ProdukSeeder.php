<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Support\Str;
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
        for ($i = 0; $i < 50; $i++) {
            DB::table('produk')->insert([
                'nama_barang' => Str::random(10),
                'supplier' => Str::random(10),
                'harga' => rand(1000, 100000),
                'stok' => rand(0, 100),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
