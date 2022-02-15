@extends('layouts.app')

@section('title')
IndoGudang | Semua Produk
@endsection

@section('content')
<div class="row mb-2">
    <div class="col-lg-12">
        <h3 class="float-start">Daftar Semua Produk di Gudang Indomaret</h3>
        <a href="produk/create" class="col-md-2 btn btn-primary float-end"><i class="fa fa-plus-square me-2"></i>Tambah
            Data</a>
    </div>
</div>
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('status') }}!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<hr>
<form action="/produk/search" method="get">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari barang.." name="cari">
        <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>
@if ($data->isEmpty())
<div class="container text-center">
    <img src="https://www.airliquidealkhafrah.sa/assets/web/images/products/empty.png" alt="kosong">
    <h3>Barang yang anda cari tidak ada.</h3>
</div>
@endif
<div class="row my-3">
    @foreach ($data as $d)
    <div class="col-6 col-md-4 col-lg-3 mb-4">
        <div class="card" style="max-height: 350px; overflow: hidden;">
            @if ($d->gambar)
            <img class="card-img-top" src="{{ Storage::url($d->gambar) }}" alt="Card image cap"
                style="width: 100%; overflow: hidden;">
            @else
            <img class="card-img-top"
                src="https://cdn.dribbble.com/users/1121009/screenshots/11030107/media/25be2b86a12dbfd8da02db4cfcbfe50a.jpg?compress=1&resize=400x300"
                alt="Card image cap" style="width: 100%; overflow: hidden;">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $d->nama_barang }}</h5>
                <p class="card-text">Stok tersedia: {{ $d->stok }} kardus</p>
                <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic outlined example">
                    <a href="/produk/{{ $d->id }}" class="btn btn-outline-secondary"><i class="fa fa-eye"></i>Detail</a>
                    <a href="/produk/{{ $d->id }}/edit" class="btn btn-outline-warning mx-2"><i
                            class="fa fa-pencil"></i>Ubah</a>
                    <form action="/produk/{{ $d->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i>Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{ $data->links() }}
@endsection