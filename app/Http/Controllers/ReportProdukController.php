<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ReportProdukController extends Controller
{
    public function index(Request $request)
    {
        $produk = Produk::orderBy('created_at','DESC')->simplePaginate(2);
        return view('reportproduk.index',compact('produk'));
    }

    //ini method untuk mencetak laporan tabel produk
    public function cetak_produk()
    {
        $R_produk = Produk::orderBy('created_at','DESC')->get();
        $pdf = 'PDF'::loadview('reportproduk.lappro_pdf', compact('R_produk'));
        return $pdf->stream();
    }
}
