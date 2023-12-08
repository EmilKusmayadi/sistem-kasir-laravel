@extends('layouts.app')

@section('content')
    <a href="/daftar_barang" class="btn btn-secondary">Kembali</a>
    <form action="{{ '/daftar_barang/'.$data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_kategori" class="form-label">Kategori</label>
            <input type="text" name="id_kategori" id="id_kategori" class="form-control" value="{{ $data->id_kategori }}">
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $data->nama_barang }}">
        </div>
        <div class="mb-3">
            <label for="lokasi_rak" class="form-label">Lokasi Rak</label>
            <input type="text" name="lokasi_rak" id="lokasi_rak" class="form-control" value="{{ $data->lokasi_rak }}">
        </div>
        <div class="mb-3">
            <button type="submit" name="" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
