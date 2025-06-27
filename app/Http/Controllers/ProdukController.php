<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Akan menampilkan daftar produk
        // return view('produk.index', compact('produks'));
    }

    public function create()
    {
        // Akan menampilkan form tambah produk
        // return view('produk.create');
    }

    public function store(Request $request)
    {
        // Validasi dan simpan produk baru
        // $validated = $request->validate([
        //     'kode_produk' => 'required|unique:produks',
        //     'nama_produk' => 'required',
        //     'harga' => 'required|numeric',
        //     'foto' => 'nullable|image',
        // ]);
        // Produk::create($validated);
        // return redirect()->route('produk.index');
    }

    public function show($id)
    {
        // Akan menampilkan detail produk
        // $produk = Produk::findOrFail($id);
        // return view('produk.show', compact('produk'));
    }

    public function edit($id)
    {
        // Akan menampilkan form edit produk
        // $produk = Produk::findOrFail($id);
        // return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        // Validasi dan update produk
        // $validated = $request->validate([
        //     'kode_produk' => 'required',
        //     'nama_produk' => 'required',
        //     'harga' => 'required|numeric',
        //     'foto' => 'nullable|image',
        // ]);
        // $produk = Produk::findOrFail($id);
        // $produk->update($validated);
        // return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        // Hapus produk
        // $produk = Produk::findOrFail($id);
        // $produk->delete();
        // return redirect()->route('produk.index');
    }
}
