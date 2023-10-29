<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Controllers\HomeController;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class NasabahController extends Controller
{
    
    public function index(Request $request)
    {
        $nasabah=Nasabah::orderBy('nama_nasabah','asc')->simplePaginate(3);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $nasabah = Nasabah::where('nama_nasabah','LIKE',"%$filterKeyword")->paginate(1);
        }  

        return view('nasabah.index',compact('nasabah'));
    }

    public function create()
    {
        return view('nasabah.create');
    }

   
    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'nama_nasabah'=>'required|max:70',
            'email_nasabah'=>'required|email|max:20|unique:nasabahs,email_nasabah',
            'nomor_telepon'=>'required|max:14',
            'jenis_kelamin'=>'required',
            'alamat'=>'required|max:200',
        ]);

        if ($validasi->fails()) {
            return redirect()->route('nasabah.create')
                ->withInput()
                ->withErrors($validasi);
        }

        Nasabah::create($simpan);
        Alert::success('Berhasil', 'Data berhasil ditambah');
        return redirect()->route('nasabah.index')->with('success','Nasabah berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $nasabah = Nasabah::findOrfail($id);
        return view('nasabah.show',compact('nasabah'));
    }

   
    public function edit(string $id)
    {
        $nasabah = Nasabah::findOrfail($id);
        return view('nasabah.edit',compact('nasabah'));
    }

    
    public function update(Request $request, string $id)
    {
        $nasabah = Nasabah::findOrfail($id);
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'nama_nasabah'=>'required|max:70',
            'email_nasabah'=>'required|email|max:20|unique:nasabahs,email_nasabah,'.$id,
            'nomor_telepon'=>'required|max:14',
            'jenis_kelamin'=>'required',
            'alamat'=>'required|max:200',
        ]);

        if($validasi->fails())
        {
            return redirect()->route('nasabah.create')->withInput()->withErrors($validasi);
        }

        $nasabah->update($simpan);
        Alert::success('Berhasil', 'Data berhasil diedit');
        return redirect()->route('nasabah.index')->with('success','Nasabah berhasil diedit');
    }

    
    public function destroy(string $id)
    {
        $data = Nasabah::findOrfail($id);
        $data->delete();
        Alert::success('Berhasil', 'Data sudah dihapus');
        return redirect()->route('nasabah.index')->with('status','Nasabah berhasil di hapus');
    }
}
