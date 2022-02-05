<?php

namespace Database\Seeders;

use App\Models\Produk;
use DateTime;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            $ps = new Produk();
            $ps->nama_barang = $faker->jobTitle();
            $ps->supplier = $faker->company();
            $ps->harga = rand(1000, 200000);
            $ps->stok = rand(10, 100);
            $ps->created_at = new DateTime();
            $ps->updated_at = new DateTime();
            $ps->save();
        }
    }
}
