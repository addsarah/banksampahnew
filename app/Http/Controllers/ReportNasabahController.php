<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class ReportNasabahController extends Controller
{
    public function index(Request $request)
    {
        $nasabah = Nasabah::orderBy('nama_nasabah','DESC')->simplePaginate(2);
        return view('reportnasabah.index',compact('nasabah'));
    }

    //ini method untuk mencetak laporan tabel nasabah
    public function cetak_nasabah()
    {
        $R_nasabah = Nasabah::orderBy('nama_nasabah','DESC')->get();
        $pdf = 'PDF'::loadview('reportnasabah.lapnas_pdf', compact('R_nasabah'));
        return $pdf->stream();
    }
}
