<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    
    public function home()
    {
    	return view('dosen.home');
    }
    public function daftarbimbingan()
    {
        
        $kp = DB::table('kp1')->get();
        return view('dosen.daftarBimb', ['kp' => $kp]);
    }

  
    public function __construct()
    {
            $this ->middleware('auth');
   }

   
   public function JadwalUjian(){
    $ju = DB::table('jadwalujian')->get();
    return view('dosen.jadwalUjian', ['ju' => $ju]);
}



    

}