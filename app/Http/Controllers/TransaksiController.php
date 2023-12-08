<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransaksiController extends Controller
{
    function index()
    {
        $data = Transaksi::all();
        return view('transaksi.index')->with('data', $data);
    }
    function create()
    {
        return view('transaksi.create');
    }
    function store(Request $request)
    {
        Session::flash('id_kasir', $request->id_kasir);
        Session::flash('id_pelanggan', $request->id_pelanggan);
        Session::flash('kembalian', $request->kembalian);
        Session::flash('tipe_pembayaran', $request->tipe_pembayaran);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('uang_di_bayar', $request->uang_di_bayar);
        Session::flash('jumlah_barang', $request->jumlah_barang);

        $request->validate([
            'id_kasir' => 'required',
            'id_pelanggan' => 'required',
            'kembalian' => 'required',
            'tipe_pembayaran' => 'required',
            'tanggal' => 'required',
            'uang_di_bayar' => 'required',
            'jumlah_barang' => 'required',
        ], [
            'id_kasir.required' => 'nama kasir wajib di isi',
            'id_pelanggan.required' => 'nama pelanggan wajib di isi',
            'kembalian.required' => 'kembalian wajib di isi',
            'tipe_pembayaran.required' => 'tipe pembayaran wajib di isi',
            'tanggal.required' => 'tanggal wajib di isi',
            'uang_di_bayar.required' => 'uang yang di bayar wajib di isi',
            'jumlah_barang.required' => 'jumlah barang wajib di isi',
        ]);
        $data = [
            'id_kasir' => $request->input('id_kasir'),
            'id_pelanggan' => $request->input('id_pelanggan'),
            'kembalian' => $request->input('kembalian'),
            'tipe_pembayaran' => $request->input('tipe_pembayaran'),
            'tanggal' => $request->input('tanggal'),
            'uang_di_bayar' => $request->input('uang_di_bayar'),
            'jumlah_barang' => $request->input('jumlah_barang'),
        ];
        Transaksi::create($data);
        return redirect('transaksi')->with('success', 'berhasil memasukkan data');
    }

    function edit(string $id)
    {
        $data = Transaksi::where('id', $id)->first();
        return view('transaksi.edit')->with('data', $data);
    }

    function update(Request $request, string $id)
    {
        $request->validate([
            'id_kasir' => 'required',
            'id_pelanggan' => 'required',
            'kembalian' => 'required',
            'tipe_pembayaran' => 'required',
            'tanggal' => 'required',
            'uang_di_bayar' => 'required',
            'jumlah_barang' => 'required',
        ], [
            'id_kasir.required' => 'nama kasir wajib di isi',
            'id_pelanggan.required' => 'nama pelanggan wajib di isi',
            'kembalian.required' => 'kembalian wajib di isi',
            'tipe_pembayaran.required' => 'tipe pembayaran wajib di isi',
            'tanggal.required' => 'tanggal wajib di isi',
            'uang_di_bayar.required' => 'uang yang di bayar wajib di isi',
            'jumlah_barang.required' => 'jumlah barang wajib di isi',
        ]);
        $data = [
            'id_kasir' => $request->input('id_kasir'),
            'id_pelanggan' => $request->input('id_pelanggan'),
            'kembalian' => $request->input('kembalian'),
            'tipe_pembayaran' => $request->input('tipe_pembayaran'),
            'tanggal' => $request->input('tanggal'),
            'uang_di_bayar' => $request->input('uang_di_bayar'),
            'jumlah_barang' => $request->input('jumlah_barang'),
        ];
        Transaksi::where('id', $id)->update($data);
        return redirect('/transaksi')->with('success', 'Berhasil memasukkan data');
    }

    function destroy(string $id)
    {
        Transaksi::where('id', $id)->delete();
        return redirect('/transaksi')->with('success', 'Berhasil hapus data');
    }
}
