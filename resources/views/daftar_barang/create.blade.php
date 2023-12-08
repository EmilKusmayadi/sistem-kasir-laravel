@extends('layouts.app')

@section('content')
    <form action="/daftar_barang" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id_kategori" class="form-label">Kategori</label>
            <input type="text" name="id_kategori" id="id_kategori" class="form-control" value="{{ Session::get('id_kategori') }}">
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ Session::get('nama_barang') }}">
        </div>
        <div class="mb-3">
            <label for="lokasi_rak" class="form-label">Lokasi Rak</label>
            <input type="text" name="lokasi_rak" id="lokasi_rak" class="form-control" value="{{ Session::get('lokasi_rak') }}">
        </div>
        <div class="mb-3">
            <button type="submit" name="" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
