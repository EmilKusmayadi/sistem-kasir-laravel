@extends('layouts.app')

@section('content')
    <a href="/transaksi/create" class="btn btn-primary w-300px mb-10">+Tambah data transaksi</a>
    <div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr class="fw-bold fs-6 text-gray-800">
				<th>Kasir</th>
                <th>Pelanggan</th>
                <th>Kembalian</th>
                <th>Tipe Pembayaran</th>
                <th>Tanggal</th>
                <th>Uang Di Bayar</th>
                <th>Jumlah Branag</th>
                <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($data as $datas)
                <tr>
                    <td>{{ $datas->kasir->nama_kasir ?? '' }}</td>
                    <td>{{ $datas->pelanggan->nama_pelanggan ?? '' }}</td>
                    <td>{{ $datas->kembalian }}</td>
                    <td>{{ $datas->tipe_pembayaran }}</td>
                    <td>{{ $datas->tanggal }}</td>
                    <td>{{ $datas->uang_di_bayar }}</td>
                    <td>{{ $datas->jumlah_barang }}</td>
                    <td>
                        <a href="{{ url('/transaksi/'.$datas->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Yakin mau hapus data')" action="{{ '/transaksi/'.$datas->id }}" method="POST" class="d-inline">
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
@endsection

