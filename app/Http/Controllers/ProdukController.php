<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produk::latest()->paginate(8);
        return view('produk.index', compact('data'));
    }

    public function cari(Request $request)
    {
        $keyword = $request->input('cari');
        $data = Produk::where('nama_barang', 'like', "%" . $keyword . "%")->paginate(8);
        return view('produk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_barang' => 'required',
            'supplier' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'image',
        ]);
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('img');
        } else {
            $file = '';
        }
        Produk::create([
            'nama_barang' => $request->input('nama_barang'),
            'supplier' => $request->input('supplier'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'gambar' => $file,
        ]);
        return redirect('produk')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $validation = $request->validate([
            'nama_barang' => 'required',
            'supplier' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'required|image',
        ]);
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('img');
        }
        $produk->update([
            'nama_barang' => $request->input('nama_barang'),
            'supplier' => $request->input('supplier'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'gambar' => $file,
        ]);
        return redirect('produk')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        Storage::delete($produk->gambar);
        return redirect('produk')->with('status', 'Data berhasil dihapus');
    }
}
