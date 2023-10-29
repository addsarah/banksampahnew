<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    // menampilkan isi session
    public function tampilkanSession(Request $request){
        if($request->session()->has('nama')){
            $nama = $request->session()->get('nama');
            $kelas = $request->session()->get('kelas');
            $alamat = $request->session()->get('alamat');
            echo "nama: ". $nama . "<br>";
            echo "kelas: ". $kelas . "<br>";
            echo "alamat: ". $alamat . "<br>";
        }else{
            echo 'Tidak ada data dalam session.';
        }
    }

    // membuat session
    public function buatSession(Request $request) {
        $request->session()->put('nama','Sarah');
        $request->session()->put('kelas','XII RPL');
        $request->session()->put('alamat','Cipinang Pulo');
        echo "Data telah ditambahkan ke session.";
    }

     // menghapus session
    public function hapusSession(Request $request) {
        $request->session()->forget('nama');
        $request->session()->forget('kelas');
        $request->session()->forget('alamat');
        echo "Data telah dihapus dari session.";
    }

}