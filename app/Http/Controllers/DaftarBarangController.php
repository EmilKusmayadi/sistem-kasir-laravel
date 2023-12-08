<?php

namespace App\Http\Controllers;

use App\Models\DaftarBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DaftarBarangController extends Controller
{
    public function index()
    {
        $data = DaftarBarang::all();
        return view('daftar_barang.index')->with('data', $data);
        // dd($data);
    }

    public function create()
    {
        return view('daftar_barang.create');
    }

    public function store(Request $request)
    {
        Session::flash('id_kategori', $request->id_ketegori);
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('lokasi_rak', $request->lokasi_rak);

        $request->validate([
            'id_kategori' => 'required|integer',
            'nama_barang' => 'required',
            'lokasi_rak' => 'required'
        ], [
            'id_kategori.required' => 'kategori wajib di isi',
            'nama_barang.required' => 'nama barang wajib di isi',
            'lokasi_rak.required' => 'lokasi rak wajib di isi'
        ]);
        $data = [
            'id_kategori' => $request->input('id_kategori'),
            'nama_barang' => $request->input('nama_barang'),
            'lokasi_rak' => $request->input('lokasi_rak'),
        ];
        DaftarBarang::create($data);
        return redirect('daftar_barang')->with('success', 'Berhasil memasukkan data');
    }

    public function edit(string $id)
    {
        $data = DaftarBarang::where('id', $id)->first();
        return view('daftar_barang.edit')->with('data', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_kategori' => 'required|integer',
            'nama_barang' => 'required',
            'lokasi_rak' => 'required'
        ], [
            'id_kategori.required' => 'kategori wajib di isi',
            'nama_barang.required' => 'nama barang wajib di isi',
            'lokasi_rak.required' => 'lokasi rak wajib di isi'
        ]);
        $data = [
            'id_kategori' => $request->input('id_kategori'),
            'nama_barang' => $request->input('nama_barang'),
            'lokasi_rak' => $request->input('lokasi_rak'),
        ];

        DaftarBarang::where('id', $id)->update($data);
        return redirect('/daftar_barang')->with('success', 'Berhasil memasukkan data');
    }

    public function destroy(string $id)
    {
        DaftarBarang::where('id', $id)->delete();
        return redirect('/daftar_barang')->with('success', 'Berhasil hapus data');
    }
}
