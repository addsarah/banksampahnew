<?php

namespace App\Http\Controllers;

use App\Models\Pengemudi;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Controllers\HomeController;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PengemudiController extends Controller
{
    
    public function index(Request $request)
    {
        $pengemudi=Pengemudi::orderBy('nama_pengemudi','asc')->simplePaginate(3);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $pengemudi = Pengemudi::where('nama_pengemudi','LIKE',"%$filterKeyword")->paginate(1);
        }  

        return view('pengemudi.index',compact('pengemudi'));
    }

    public function create()
    {
        return view('pengemudi.create');
    }

   
    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'nama_pengemudi'=>'required|max:100',
            'jenis_kelamin'=>'required',
            'email_pengemudi'=>'required|email|unique:pengemudis,email_pengemudi,',
            'nomor_telepon'=>'required|max:14',
            'tanggal_lahir'=>'required',
            'alamat'=>'required|max:200',
            'jenis_kendaraan'=>'required',
        ]);

        if ($validasi->fails()) {
            return redirect()->route('pengemudi.create')->withInput()->withErrors($validasi);
        }

        Pengemudi::create($simpan);
        Alert::success('Berhasil', 'Data berhasil ditambah');
        return redirect()->route('pengemudi.index')->with('success','pengemudi berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $pengemudi = Pengemudi::findOrfail($id);
        return view('pengemudi.show',compact('pengemudi'));
    }

   
    public function edit(string $id)
    {
        $pengemudi = Pengemudi::findOrfail($id);
        return view('pengemudi.edit',compact('pengemudi'));
    }

    
    public function update(Request $request, string $id)
    {
        $pengemudi = Pengemudi::findOrfail($id);
        $data = $request->all();
        $validasi = Validator::make($data,[
            'nama_pengemudi'=>'required|max:100',
            'jenis_kelamin'=>'required',
            'email_pengemudi'=>'required|email|unique:pengemudis,email_pengemudi,'.$id,
            'nomor_telepon'=>'required|max:14',
            'tanggal_lahir'=>'required',
            'alamat'=>'required|max:200',
            'jenis_kendaraan'=>'required',
        ]);

        if($validasi->fails())
        {
            return redirect()->route('pengemudi.create')->withInput()->withErrors($validasi);
        }

        $pengemudi->update($data);
        Alert::success('Berhasil', 'Data berhasil diedit');
        return redirect()->route('pengemudi.index')->with('success','pengemudi berhasil diedit');
    }

    
    public function destroy(string $id)
    {
        $data = Pengemudi::findOrfail($id);
        $data->delete();
        Alert::success('Berhasil', 'Data sudah dihapus');
        return redirect()->route('pengemudi.index')->with('status','pengemudi berhasil di hapus');
    }
}