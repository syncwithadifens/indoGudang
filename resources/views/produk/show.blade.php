@extends('template')

@section('title')
IndoGudang | Detail Produk
@endsection

@section('content')
<div class="container mt-4">
    <h1>Detail Produk</h1>
    <hr>
    <dl>
        <dt>Gambar Produk</dt>
        <img src="{{ Storage::url($produk->gambar) }}" alt="gambar" width="300">

        <dt>Nama Produk</dt>
        <dd>{{ $produk->nama_barang }}</dd>

        <dt>Supplier</dt>
        <dd>{{ $produk->supplier }}</dd>

        <dt>Harga</dt>
        <dd>{{ $produk->harga }}</dd>

        <dt>Jumlah Stok</dt>
        <dd>{{ $produk->stok }}</dd>
    </dl>
    <a href="/produk" class="btn btn-outline-secondary">Kembali</a>
</div>
@endsection