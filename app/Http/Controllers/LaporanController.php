<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\replacement;
use PDF;

class LaporanController extends Controller
{
    //
    public function index(){
        $rpe = replacement::all();
        return view('laporan/replacement', ['replacement'=>$rpe]);
    }

    public function cetak_pdf(){
        $rpe = replacement::all();
        $pdf = PDF::loadview('laporan/replacementpdf', ['replacement'=>$rpe]);

        return $pdf->download('laporan-replacement');
    }
}