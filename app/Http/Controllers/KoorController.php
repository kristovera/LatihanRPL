<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ujian1;

class KoorController extends Controller
{
    public function index(){
        return view('koor.home');
    }
  
   ///KP
    public function formKP(){
        $kp = DB::table('pengajuan_kp')->get();
        return view('koor.verifikasiKp', ['kp' => $kp]);
    }
    public function editKP($id) {
        $kp = DB::table('pengajuan_kp')->where('id',$id)->get();
        return view('koor.editKp',['kp' =>$kp]);
    }
    public function updateKp($id, Request $request) {
  
        DB::table('pengajuan_kp')->where('id',$id)
        ->update([
        'nim'=>$request->nim,
        'judul_kp'=>$request->judul_kp,
        'penguji'=>$request->penguji,
        'tahun'=> $request->tahun,
        'dokumen'=> $request->dokumen,
        'status'=>$request->status
       
        ]);
        return redirect('koor/verifikasiKp')->with('status', 'Berhasil diupdate!');
  
    }
  

    public function daftarkp()
    {
    	$kp = DB::table('v_batas')->get();
    	return view('koor.daftarKP', ['kp' => $kp]);
    }   

   
    //PraKP
    public function formPraKP(){
        $praKp = DB::table('pengajuan_prakp')->get();
        return view('koor.verifikasiPraKp', ['praKp' => $praKp]);
    }
    public function editPraKP($id) {
        $prakp = DB::table('pengajuan_prakp')->where('id',$id)->get();
        return view('koor.editPra',['prakp' =>$prakp]);
      
    }
    public function updatePra($id, Request $request) {
  
        DB::table('pengajuan_prakp')->where('id',$id)
        ->update([
        'nim'=>$request->nim,
        'penguji'=>$request->penguji,
        'lembaga'=>$request->lembaga,
        'tahun'=> $request->tahun,
        'status'=>$request->status
       
        ]);
        return redirect('koor/verifikasiPraKp')->with('status', 'Berhasil diupdate!');
  
    }
    ///SK
      public function editSK($id) {
        $sk = DB::table('suratket')->where('id',$id)->get();
        return view('koor.editSK',['sk' =>$sk]);
      
    }

    public function formSKP(){
        $skp = DB::table('suratket')->get();
        return view('koor.verifikasiSuratKet', ['skp' => $skp]);
    }
    public function updateSK($id, Request $request) {
  
        DB::table('suratket')->where('id',$id)
        ->update([
        'nim'=>$request->nim,
        'lembaga'=>$request->lembaga,
        'tahun'=> $request->tahun,
        'dokumen'=>$request->dokumen,
        'status'=>$request->status
       
        ]);
        return redirect('koor/verifikasiSuratKet')->with('status', 'Berhasil diupdate!');
  
    }


    public function jadwalkp()
    {
    	$kp = DB::table('pengajuan_kp')->where('status', '=', '1')->get();
    	$dosen = DB::table('dosen')->get();
    	return view('koor.jadwalKp', ['kp' => $kp, 'dosen' => $dosen]);
    }
    public function __construct()
    {
            $this ->middleware('auth');
   }



   /// JADWAL UJIAN

   public function JadwalUjian(){
    $ju = DB::table('jadwalujian')->get();
    return view('koor.jadwalUjian', ['ju' => $ju]);
}

      public function editUjian($id)
    {
        $ju = DB::table('jadwalujian')->where('id',$id)->get();
        return view('koor.editUjian',['ju' =>$ju]);
   
    }
     public function updateUjian($id, Request $request) {
  
      DB::table('jadwalujian')->where('id',$id)
      ->update([
      'tanggal'=> $request->tanggal,
      'nim'=>$request->nim,
      'judul_kp'=> $request->judul_kp,
      'penguji'=>$request->penguji,
      'ruang'=>$request->ruang,
      'jam'=> $request->jam
     
      ]);
      return redirect('koor/ViewUjian')->with('status', 'Berhasil diupdate!');

  }

    public function formUjian(){
    $ju = DB::table('jadwalUjian')->get();
    return view('koor.ViewUjian', ['ju' => $ju]);
}

public function simpanUjian(Request $request){
    //$bhs = implode(",", $request->get('bahasa'));
    DB::table('jadwalujian')->insert([
        'tanggal'=> $request->tanggal,
      'nim'=>$request->nim,
      'judul_kp'=> $request->judul_kp,
      'penguji'=>$request->penguji,
      'ruang'=>$request->ruang,
      'jam'=> $request->jam
    ]);
    return redirect('/koor/jadwalUjian')->with('status', 'Tersimpan');
}


////BATAS
    public function formBatas(){
    $bt = DB::table('batas')->get();
    return view('koor.batas', ['bt' => $bt]);
}

public function simpanBatas(Request $request){
    DB::table('Batas')->insert([
        'nim' => $request->nim,
        'penguji'=>$request->penguji,
        'tanggal_mulai'=> $request->tanggal_mulai,
        'tanggal_akhir' => $request->tanggal_akhir,
        
    ]);
    return redirect('/koor/batas')->with('success','Tersimpan');

}
  public function updateBatas($id, Request $request) {
  
    DB::table('batas')->where('id',$id)
    ->update([
    'nim'=>$request->nim,
    'penguji'=>$request->penguji,
    'tanggal_mulai'=>$request->tanggal_mulai,
    'tanggal_akhir'=> $request->tanggal_akhir
   
    ]);
    return redirect('koor/batas')->with('status', 'Berhasil diupdate!');

}
public function editBatas($id) {
    $bt = DB::table('batas')->where('id',$id)->get();
    return view('koor.editBatas',['bt' =>$bt]);
  
}


   
   




}