@extends('template')

@section('title')
IndoGudang | Input Data Produk
@endsection

@section('content')
<div class="container mt-4">
    <h1>Input Data Produk</h1>
    <hr class="mb-4">
    <form action="/produk" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="bg-white form-control @error('nama_barang') is-invalid @enderror"
                    name="nama_barang" value="{{ old('nama_barang') }}" autofocus>
                @error('nama_barang')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" class="bg-white form-control @error('supplier') is-invalid @enderror" name="supplier"
                    value="{{ old('supplier') }}">
                @error('supplier')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="harga" class="form-label">Harga Satuan</label>
                <input type="text" class="bg-white form-control @error('harga') is-invalid @enderror" name="harga"
                    value="{{ old('harga') }}">
                @error('harga')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="stok" class="form-label">Jumlah Stok</label>
                <input type="text" class="bg-white form-control @error('stok') is-invalid @enderror" name="stok"
                    value="{{ old('stok') }}">
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
        <button type="submit" class="btn btn-outline-primary">Tambah</button>
    </form>
</div>
@endsection