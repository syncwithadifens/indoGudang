<?php

namespace Database\Seeders;

use App\Models\Produk;
use DateTime;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ps = new Produk();
        $ps->nama_barang = 'Indomie';
        $ps->supplier = 'PT Indofood Sukses Makmur Tbk';
        $ps->harga = 2000;
        $ps->stok = 80;
        $ps->created_at = new DateTime();
        $ps->updated_at = new DateTime();
        $ps->save();

        $ps1 = new Produk();
        $ps1->nama_barang = 'Coca Cola';
        $ps1->supplier = 'The Coca Cola Company';
        $ps1->harga = 6000;
        $ps1->stok = 20;
        $ps1->created_at = new DateTime();
        $ps1->updated_at = new DateTime();
        $ps1->save();

        $ps9 = new Produk();
        $ps9->nama_barang = 'Sarimi';
        $ps9->supplier = 'PT Indofood Sukses Makmur Tbk';
        $ps9->harga = 3000;
        $ps9->stok = 70;
        $ps9->created_at = new DateTime();
        $ps9->updated_at = new DateTime();
        $ps9->save();

        $ps2 = new Produk();
        $ps2->nama_barang = 'Sprite';
        $ps2->supplier = 'The Coca Cola Company';
        $ps2->harga = 6000;
        $ps2->stok = 10;
        $ps2->created_at = new DateTime();
        $ps2->updated_at = new DateTime();
        $ps2->save();

        $ps5 = new Produk();
        $ps5->nama_barang = 'Mie Sedaap';
        $ps5->supplier = 'Wings Food';
        $ps5->harga = 2000;
        $ps5->stok = 100;
        $ps5->created_at = new DateTime();
        $ps5->updated_at = new DateTime();
        $ps5->save();

        $ps3 = new Produk();
        $ps3->nama_barang = 'Kacang Garuda';
        $ps3->supplier = 'PT Indofood Sukses Makmur Tbk';
        $ps3->harga = 15000;
        $ps3->stok = 44;
        $ps3->created_at = new DateTime();
        $ps3->updated_at = new DateTime();
        $ps3->save();

        $ps4 = new Produk();
        $ps4->nama_barang = 'Oreo';
        $ps4->supplier = 'Mondelez Indonesia';
        $ps4->harga = 6000;
        $ps4->stok = 15;
        $ps4->created_at = new DateTime();
        $ps4->updated_at = new DateTime();
        $ps4->save();

        $ps6 = new Produk();
        $ps6->nama_barang = 'Bimoli';
        $ps6->supplier = 'PT Salim Ivomas Pratama Tbk';
        $ps6->harga = 33000;
        $ps6->stok = 12;
        $ps6->created_at = new DateTime();
        $ps6->updated_at = new DateTime();
        $ps6->save();

        $ps7 = new Produk();
        $ps7->nama_barang = 'Kuaci Rebo';
        $ps7->supplier = 'PT. Gumindo Bogamanis';
        $ps7->harga = 15000;
        $ps7->stok = 5;
        $ps7->created_at = new DateTime();
        $ps7->updated_at = new DateTime();
        $ps7->save();

        $ps8 = new Produk();
        $ps8->nama_barang = 'HotWheels Invisible Boat';
        $ps8->supplier = 'Mattel';
        $ps8->harga = 92000;
        $ps8->stok = 2;
        $ps8->created_at = new DateTime();
        $ps8->updated_at = new DateTime();
        $ps8->save();
    }
}
