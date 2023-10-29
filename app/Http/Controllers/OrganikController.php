<?php

namespace App\Http\Controllers;

use App\Models\Organik;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Controllers\HomeController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class OrganikController extends Controller
{
    
    public function index(Request $request)
    {
        $organik=Organik::orderBy('nama_organik','asc')->simplePaginate(3);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $organik = Organik::where('nama_organik','LIKE',"%$filterKeyword")->paginate(1);
        }
        return view('organik.index',compact('organik'));
    }

    public function create()
    {
        $organik = Organik::all();
        return view('organik.create', compact('organik'));
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'nama_organik'=>'required|max:200',
            'gambar'=>'required|image|mimes:jpeg,jpg,png|max:2048',
            'harga_organik'=>'required|numeric',
            'satuan_hitung'=>'required',
            'deskripsi'=>'required',
        ]);
        if($validator->fails())
        {
            return redirect()->route('organik.create')->withInput()->withErrors($validator);
        }

        $gambar = $request->file('gambar');
        $extention = $gambar->getClientOriginalExtension();
        
        if($request->file('gambar')->isValid()){
            $namafoto = "organik/".date('YmdHis').".". $extention;
            $extention;
            $upload_path = "uploads/organik";
            $request->file('gambar')->move($upload_path,$namafoto);
            $input['gambar'] = $namafoto;
        }

        Organik::create($input);
        return redirect()->route('organik.index')->with('success','organik berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $organik = Organik::findOrfail($id);
        return view('organik.show',compact('organik'));
    }

   
    public function edit(string $id)
    {
        $organik = Organik::findOrfail($id);
        return view('organik.edit',compact('organik'));
    }

    
    public function update(Request $request, $id)
    {
         // ini perintah untuk update data
         $organik = Organik::findOrfail($id);
         $input = $request->all();
         $validator = Validator::make($input,[
            'nama_organik'=>'required|max:200',
            'gambar'=>'required|image|mimes:jpeg,jpg,png|max:2048',
            'harga_organik'=>'required|numeric',
            'satuan_hitung'=>'required',
            'deskripsi'=>'required',
         ]);

        //ini perintah untuk cek validasi
         if($validator->fails())
         {
             return redirect()->route('organik.edit',[$id])->withInput()->withErrors($validator);
         }

         if($request->hasFile('gambar')){
            if($request->file('gambar')->isValid())
            {
                Storage::disk('upload')->delete($organik->gambar);
                $gambar = $request->file('gambar');

                $extention = $gambar->getClientOriginalExtension();
                $namaFoto = "organik/".date('YmdHis').".".$extention;
                $upload_path = 'uploads/organik';
                $request->file('gambar')->move($upload_path,$namaFoto);
                $input['gambar'] = $namaFoto;
            }
         }

         $organik->update($input);
        // alert()->success('Edit','Data Sudah Di Edit');
         return redirect()->route('organik.index')->with('success','organik berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Organik::findOrfail($id);
        $data->delete();
        return redirect()->route('organik.index')->with('status','organik berhasil di hapus');
    }
}
