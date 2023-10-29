<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PesananController extends Controller
{
    public function index(Request $request)
    {
        $pesanan = Pesanan::orderBy('id', 'asc')->with('produk', 'nasabah')->simplePaginate(5);

        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            Pesanan::whereHas('produk', function ($query) use ($filterKeyword) {
                $query->where('nama_nasabah', "%$filterKeyword");
            })->with('produk', 'nasabah')->paginate(1);
        }

        return view('pesanan.index', compact('pesanan'));
    }

    public function create()
    {
        $produks = Produk::all();
        $nasabahs = Nasabah::all();

        // return $produks;
        // return $nasabahs;

        return view('pesanan.create', compact('produks', 'nasabahs'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'id_nasabah' => 'required',
            'id_produk' => 'required',
            'jumlah' => 'required|numeric',
            'total_harga' => 'numeric',
            'alamat_jemput'=>'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('pesanan.create')->withInput()->withErrors($validator);
        }

        $produk = Produk::find($request->id_produk);
        $input['total_harga'] = $produk->harga * $request->jumlah;

        Pesanan::create($input);
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil ditambah');
    }

    public function show(string $id)
    {
        $pesanan = Pesanan::findOrfail($id);
        $pesanan->load('produk', 'nasabah');

        return view('pesanan.show', compact('pesanan'));
    }

    public function edit(string $id)
    {
        $pesanan = Pesanan::findOrfail($id);
        $pesanan->load('produk', 'nasabah');

        $produks = Produk::all();
        $nasabahs = Nasabah::all();

        // return compact('pesanan', nasabahs', 'users');

        return view('pesanan.edit', compact('pesanan', 'produks', 'nasabahs'));
    }

    public function update(Request $request, string $id)
    {

        // ini perintah untuk update data
        $pesanan = Pesanan::findOrfail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'id_nasabah' => 'required',
            'id_produk' => 'required',
            'jumlah' => 'required|numeric',
            'total_harga' => 'numeric',
            'alamat_jemput'=>'required',
        ]);

        //ini perintah untuk cek validasi
        if ($validator->fails()) {
            return redirect()->route('pesanan.edit', [$id])->withInput()->withErrors($validator);
        }

        $produk = Produk::find($request->id_produk);
        $input['total_harga'] = $produk->harga * $request->jumlah;

        $pesanan->update($input);
        // alert()->success('Edit','Data Sudah Di Edit');
        Alert::success('Berhasil', 'Data Berhasil Diperbarui');
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Pesanan::findOrfail($id);
        $data->delete();
        return redirect()->route('pesanan.index')->with('status', 'pesanan berhasil di hapus');
    }
}
