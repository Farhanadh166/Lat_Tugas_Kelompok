@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Produk</h2>
    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <table class="table">
        <thead>
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
            <tr>
                <td>{{ $produk->kode_produk }}</td>
                <td>{{ $produk->nama_produk }}</td>
                <td>{{ $produk->harga }}</td>
                <td>
                    @if($produk->foto)
                        <img src="{{ asset('storage/'.$produk->foto) }}" width="50">
                    @endif
                </td>
                <td>
                    <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
