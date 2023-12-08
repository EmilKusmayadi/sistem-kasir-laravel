@extends('layouts.app')

@section('content')
    <a href="/transaksi" class="btn btn-secondary">Kembali</a>
    <form action="{{ '/transaksi/'.$data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_kasir" class="form-label">Kasir</label>
            <input type="text" name="id_kasir" id="id_kasir" class="form-control" value="{{ $data->id_kasir }}">
        </div>
        <div class="mb-3">
            <label for="id_pelanggan" class="form-label">Pelanggan</label>
            <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control" value="{{ $data->id_pelanggan }}">
        </div>
        <div class="mb-3">
            <label for="kembalian" class="form-label">Kembalian</label>
            <input type="text" name="kembalian" id="kembalian" class="form-control" value="{{ $data->kembalian }}">
        </div>
        <div class="mb-3">
            <label for="tipe_pembayaran" class="form-label">Tipe Pembayaran</label>
            <input type="text" name="tipe_pembayaran" id="tipe_pembayaran" class="form-control" value="{{ $data->tipe_pembayaran }}">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="text" name="tanggal" id="tanggal" class="form-control" value="{{ $data->tanggal }}">
        </div>
        <div class="mb-3">
            <label for="uang_di_bayar" class="form-label">Uang Di Bayar</label>
            <input type="text" name="uang_di_bayar" id="uang_di_bayar" class="form-control" value="{{ $data->uang_di_bayar }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
            <input type="text" name="jumlah_barang" id="jumlah_barang" class="form-control" value="{{ $data->jumlah_barang }}">
        </div>
        <div class="mb-3">
            <button type="submit" name="" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
