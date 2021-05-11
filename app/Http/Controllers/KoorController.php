<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KoorController extends Controller
{
    public function index(){
        return view('koor.home');
    }
    public function formPraKP(){
        $praKp = DB::table('pengajuan_prakp')->get();
        return view('koor.verifikasiPraKp', ['praKp' => $praKp]);
    }
    public function formSKP(){
        $skp = DB::table('suratket')->get();
        return view('koor.verifikasiSuratKet', ['skp' => $skp]);
    }
    public function formKP(){
        $kp = DB::table('pengajuan_kp')->get();
        return view('koor.verifikasiKp', ['kp' => $kp]);
    }
}