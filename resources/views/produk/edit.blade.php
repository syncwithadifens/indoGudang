@extends('layouts.app')

@section('title')
IndoGudang | Ubah Data Produk
@endsection

@section('content')
<div class="container mt-5">
    <h1>Ubah Data Produk</h1>
    <hr class="mb-4">
    <form action="/produk/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="bg-white form-control @error('nama_barang') is-invalid @enderror"
                    name="nama_barang" value="{{ $produk->nama_barang }}">
                @error('nama_barang')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" class="bg-white form-control @error('supplier') is-invalid @enderror" name="supplier"
                    value="{{ $produk->supplier }}">
                @error('supplier')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="bg-white form-control @error('harga') is-invalid @enderror" name="harga"
                    value="{{ $produk->harga }}">
                @error('harga')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="stok" class="form-label">Jumlah Stok</label>
                <input type="text" class="bg-white form-control @error('stok') is-invalid @enderror" name="stok"
                    value="{{ $produk->stok }}">
                @error('stok')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="gambar" class="form-label">Gambar Produk</label>
                <input type="file" class="bg-white form-control @error('gambar') is-invalid @enderror" name="gambar">
                @error('gambar')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <a href="/produk" class="btn btn-outline-secondary">Kembali</a>
        <button type="submit" class="btn btn-outline-warning">Ubah</button>
    </form>
</div>
@endsection