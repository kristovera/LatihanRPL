<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class MahasiswaController extends Controller
{
    public function index(){
        return view('mhs.mhs');
    }
    public function home()
    {
    	return view('mhs.home');
    }

    public function formSKP(){
        $skp = DB::table('suratket')->get();
        return view('mhs.suratketerangan', ['skp' => $skp]);
    }
    public function simpanSKP(Request $request){
        
        DB::table('suratket')->insert([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'lembaga' => $request->lembaga,
            'pimpinan'=>$request->pimpinan,
            'dokumen'=> $request->dokumen,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'fax' => $request->fax,
            'status' => 0
        ]);
        return redirect('/layanan/suratketerangan')->with('success','Tersimpan');
    }
  
    public function formPraKP(){
        $praKp = DB::table('pengajuan_prakp')->get();
        return view('mhs.praKp', ['praKp' => $praKp]);
    }

    public function simpanPraKP(Request $request){
        DB::table('pengajuan_prakp')->insert([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'tools'=>$request->tools,
            'spesifikasi'=>$request->spesifikasi,
            'dokumen'=>$request->dokumen,
            'penguji'=>$request->penguji,
            'lembaga'=>$request->lembaga,
            'pimpinan'=>$request->pimpinan,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,
            'status' => 0

            
        ]);
        return redirect('/layanan/praKp')->with('success','Tersimpan');
    }
    public function formKP(){
        $kp = DB::table('pengajuan_kp')->get();
        return view('mhs.kp', ['kp' => $kp]);
    }

    public function simpanKP(Request $request){
     
         DB::table('pengajuan_kp')->insert([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'judul_kp' => $request->judul_kp,
            'nim' => $request->nim,
            'tools'=>$request->tools,
            'spesifikasi'=>$request->spesifikasi,
            'dokumen'=>$request->dokumen,
            'penguji'=>$request->penguji,
            'lembaga'=>$request->lembaga,
            'pimpinan'=>$request->pimpinan,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,
            'status' => 0
        ]);
        return redirect('/layanan/kp')->with('success','Tersimpan');
    }
    public function ujianKP(){
        
      $ju= DB::table('jadwalujian')-> where ('status', '=' , 'setuju')->get(); 
       // $ju = DB::table('jadwalujian')->get();
        return view('mhs.ujianKP', ['ju' => $ju]);
    }
    public function __construct()
    {
            $this ->middleware('auth');
   }
   public function searchM(Request $request) {
    $cari = $request->q;
    $ju= DB::table('jadwalujian')->where( 'status', '=' , 'setuju')
    ->get();
    return view('mhs.ujianKP',['ju' => $ju]);
}
   public function verifKP(){
    $kp = DB::table('pengajuan_kp')->where( 'status', '=' , 'Diterima')->get();
    return view('mhs.verifKp', ['kp' => $kp]);
}

    public function verifSK(){
    $skp = DB::table('suratket')->get();
    return view('mhs.verifSK', ['skp' => $skp]);
}
   public function verifPra(){
    $praKp = DB::table('pengajuan_prakp')->get();
    return view('mhs.verifPra', ['praKp' => $praKp]);
}
public function searchKP(Request $request) {
    $cari = $request->q;
    $kp= DB::table('pengajuan_kp')->where('nim','like',"%".$cari."%")
    ->paginate();
    return view('mhs.verifKp',['kp' => $kp]);
}
public function searchPra(Request $request) {
    $cari = $request->q;
    $praKp= DB::table('pengajuan_prakp')->where('nim','like',"%".$cari."%")
    ->paginate();
    return view('mhs.verifPra',['praKp' => $praKp]);
}
public function searchSK(Request $request) {
    $cari = $request->q;
    $skp= DB::table('suratket')->where('nim','like',"%".$cari."%")
    ->paginate();
    return view('mhs.verifSK',['skp' => $skp]);
}

 }



   


