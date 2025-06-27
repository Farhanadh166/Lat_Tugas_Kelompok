<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    public function create()
    {
       
         return view('produk.create');
    }

    public function store(Request $request)
    {
        
         $validated = $request->validate([
             'kode_produk' => 'required|unique:produks',
             'nama_produk' => 'required',
             'harga' => 'required|numeric',
             'foto' => 'nullable|image',
         ]);
         Produk::create($validated);
         return redirect()->route('produk.index');
    }

    public function show($id)
    {
         
         $produk = Produk::findOrFail($id);
         return view('produk.show', compact('produk'));
    }

    public function edit($id)
    {
        
         $produk = Produk::findOrFail($id);
         return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
         
         $validated = $request->validate([
             'kode_produk' => 'required',
             'nama_produk' => 'required',
             'harga' => 'required|numeric',
             'foto' => 'nullable|image',
         ]);
         $produk = Produk::findOrFail($id);
         $produk->update($validated);
         return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
         
         $produk = Produk::findOrFail($id);
         $produk->delete();
         return redirect()->route('produk.index');
    }
}
