@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Produk</h2>

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Kode Produk</label>
            <input type="text" class="form-control @error('kode_produk') is-invalid @enderror" 
                   name="kode_produk" value="{{ old('kode_produk') }}">
            @error('kode_produk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" 
                   name="nama_produk" value="{{ old('nama_produk') }}">
            @error('nama_produk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" 
                   name="harga" value="{{ old('harga') }}">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Foto</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
            @error('foto')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
