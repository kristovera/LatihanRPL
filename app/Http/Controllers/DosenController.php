<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index(){
        return view('Dosen.login');
    }
    public function home()
    {
    	return view('Dosen.home');
    }
    public function daftarbimbingan()
    {
          
        $kp = DB::table('view_kp_dosen')->where('penguji', '=', session('id_koor'))->get();
        return view('dosen.daftarBimb', ['kp' => $kp]);
    }

    public function jadwalujian()
    {
    	
        $kp = DB::table('pengajuan_kp')->where('penguji', '=', session('id_koor'))->get();
        return view('dosen.jadwalUjian', ['kp' => $kp]);
    }

    

}