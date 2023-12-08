{{-- @extends('layouts.app')
@section('content')

<a href="/daftar_barang/create" class="btn btn-primary w-300px mb-10">+Tambah daftar barang</a>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr class="fw-bold fs-6 text-gray-800">
                    <th>Kategori</th>
                    <th>nama Barang</th>
                    <th>Lokasi Rak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                    <tr>
                        <td>{{ $datas->kategori->nama_ketegori ?? '' }}</td>
                        <td>{{ $datas->nama_barang }}</td>
                        <td>{{ $datas->lokasi_rak }}</td>
                        <td>
                            <a href="{{ url('/daftar_barang/'.$datas->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin mau hapus data')" action="{{ '/daftar_barang/'.$datas->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}
