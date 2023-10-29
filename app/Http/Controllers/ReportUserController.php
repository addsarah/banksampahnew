<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class ReportUserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderBy('created_at','DESC')->simplePaginate(2);
        return view('reportuser.index',compact('user'));
    }

    //ini method untuk mencetak laporan tabel user
    public function cetak_user()
    {
        $R_user = User::orderBy('created_at','DESC')->get();
        $pdf = 'PDF'::loadview('reportuser.lapuser_pdf', compact('R_user'));
        return $pdf->stream();
    }
}