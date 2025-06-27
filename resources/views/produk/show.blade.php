@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Produk</h2>

    <div class="card">
        <div class="card-body">
            @if($produk->foto)
                <img src="{{ asset('storage/'.$produk->foto) }}" class="img-fluid mb-3" style="max-width: 200px;">
            @endif
            
            <h5>Kode Produk: {{ $produk->kode_produk }}</h5>
            <h5>Nama Produk: {{ $produk->nama_produk }}</h5>
            <h5>Harga: Rp {{ number_format($produk->harga, 0, ',', '.') }}</h5>
            
            <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
