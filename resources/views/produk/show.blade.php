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
        @if ($produk->gambar)
        <img class="card-img-top" src="{{ Storage::url($produk->gambar) }}" alt="Card image cap" style="width: 300px">
        @else
        <img class="card-img-top"
            src="https://cdn.dribbble.com/users/1121009/screenshots/11030107/media/25be2b86a12dbfd8da02db4cfcbfe50a.jpg?compress=1&resize=400x300"
            alt="Card image cap" style="width: 300px">
        @endif
        <dt>Nama Produk</dt>
        <dd>{{ $produk->nama_barang }}</dd>

        <dt>Supplier</dt>
        <dd>{{ $produk->supplier }}</dd>

        <dt>Harga Satuan</dt>
        <dd>Rp{{ $produk->harga }}</dd>

        <dt>Jumlah Stok</dt>
        <dd>{{ $produk->stok }} Kardus</dd>
    </dl>
    <a href="/produk" class="btn btn-outline-secondary">Kembali</a>
</div>
@endsection