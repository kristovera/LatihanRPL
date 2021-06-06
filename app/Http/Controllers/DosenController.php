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
    $j = DB::table('jadwalujian')->get();
    return view('dosen.jadwalUjian', ['j' => $j]);
}

     public function editUjian($id)
{
    $j = DB::table('jadwalujian')->where('id',$id)->get();
    return view('dosen.editUjian',['j' =>$j]);

}
    public function updateUjian($id, Request $request) {

  DB::table('jadwalujian')->where('id',$id)
  ->update([
  'tanggal'=> $request->tanggal,
  'nim'=>$request->nim,
  'judul_kp'=> $request->judul_kp,
  'penguji'=>$request->penguji,
  'ruang'=>$request->ruang,
  'jam'=> $request->jam,
  'status' => $request->status
 
  ]);
  return redirect('dosen/jadwalUjian')->with('status', 'Berhasil diupdate!');

}

public function searchD(Request $request) {
    $cari = $request->q;
    $kp= DB::table('kp1')->where('penguji','like',"%".$cari."%")
    ->paginate();
    return view('dosen.daftarBimb',['kp' => $kp]);
}


    

}