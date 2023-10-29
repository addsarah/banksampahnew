<?php

namespace App\Http\Controllers;

use App\Models\Pengemudi;
use Illuminate\Http\Request;

class ReportPengemudiController extends Controller
{
    public function index(Request $request)
    {
        $pengemudi = Pengemudi::orderBy('nama_pengemudi','DESC')->simplePaginate(4);
        return view('reportpengemudi.index',compact('pengemudi'));
    }

    //ini method untuk mencetak laporan tabel pengemudi
    public function cetak_pengemudi()
    {
        $R_pengemudi = Pengemudi::orderBy('created_at','DESC')->get();
        $pdf = 'PDF'::loadview('reportpengemudi.lappeng_pdf', compact('R_pengemudi'));
        return $pdf->stream();
    }
}
