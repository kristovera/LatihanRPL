<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\CaraController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KoorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::post('/login', 'Auth\LoginController@login')->middleware('cekstatus');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return view('dashboard');})->name('dashboard');
//Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

//Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//dashboard
//Route::get('/mhs/login', [MahasiswaController::class,'index']);
//Route::get('/tata', [CaraController::class,'index']);


//MHS
Route::group(['middleware' =>'mhs'] , function() {
    Route::get('/layanan/suratket/addMhs', [MahasiswaController::class,'tambah']);
    //Route::get('/', [MahasiswaController::class,'tambah']);
    Route::get('/layanan/suratketerangan', [MahasiswaController::class,'formSKP']);
    Route::get('/mhs/home', [MahasiswaController::class,'home']);
    Route::get('/layanan/suratketerangan/simpanSKP', [MahasiswaController::class,'simpanSKP']);
    Route::get('/layanan/kp', [MahasiswaController::class,'formKP']);
    Route::get('/layanan/praKp', [MahasiswaController::class,'formPraKP']);
    Route::get('/layanan/praKp/simpanPraKp', [MahasiswaController::class,'simpanPraKp']);
    //Route::get('/layanan/kp/simpanKP', [MahasiswaController::class,'simpanKP']);
    Route::get('/mhs/ujianKp', [MahasiswaController::class ,'ujiankp']);
    Route::get('/contact', [contactController::class,'index']);

    


  
    });
    
        //dosen
    Route::group(['middleware' =>'dosen'] , function() {
    
    //Route::get('/dosen/login', [DosenController::class,'index']);
    Route::get('/dosen/home', [DosenController::class,'home']);


    Route::get('/dosen/daftarBimb', [DosenController::class,'daftarbimbingan']);
    Route::get('/dosen/jadwalUjian', [DosenController::class,'jadwalujian']);
    Route::get('/dosen/jadwalUjian/editUjian/{id}', [DosenController::class,'editUjian']);
    Route::put('/dosen/jadwalUjian/updated/{id}', [DosenController::class,'updateUjian']);
  


    });

    //koor
    Route::group(['middleware' =>'koor'] , function() {
        

    Route::get('/koor/home', [KoorController::class,'index']);
    Route::get('/koor/jadwalKp', [KoorController::class,'jadwalkp']);

    Route::get('/koor/daftarKP', [KoorController::class,'daftarkp']);

    Route::get('/koor/batas', [KoorController::class,'formBatas']);
    Route::get('/koor/batas/editBatas/{id}', [KoorController::class,'editBatas']);
    Route::put('/koor/batas/updated/{id}', [KoorController::class,'updateBatas']);

    Route::get('/koor/verifikasiPraKp',[KoorController::class,'formPraKp']);
    Route::get('/koor/verifikasiPraKp/editPra/{id}',[KoorController::class,'editPraKp']);
    Route::put('/koor/verifikasiPraKp/updated/{id}',[KoorController::class,'updatePra']);

    Route::get('/koor/verifikasiSuratKet',[KoorController::class,'formSKP']);
    Route::get('/koor/verifikasiSuratKet/editSK/{id}',[KoorController::class,'editSK']);
    Route::put('/koor/verifikasiSuratKet/updated/{id}',[KoorController::class,'updateSK']);


    Route::get('/koor/verifikasiKp',[KoorController::class,'formKP']);
    Route::get('/koor/verifikasiKp/editKp/{id}',[KoorController::class,'editKP']);
    Route::put('/koor/verifikasiKp/updated/{id}',[KoorController::class,'updateKP']);
   


   

    Route::get('/koor/ViewUjian', [KoorController::class,'formUjian']);
    Route::get('/koor/ViewUjian/editUjian/{id}', [KoorController::class,'editUjian']);
    Route::put('/koor/ViewUjian/updated/{id}', [KoorController::class,'updateUjian']);


    Route::get('/koor/jadwalUjian', [KoorController::class,'JadwalUjian']);
    Route::get('/layanan/jadwalUjian/simpanUjian', [KoorController::class,'simpanUjian']);

    Route::get('/koor/batas', [KoorController::class,'formBatas']);
    Route::get('/layanan/batas/simpanBatas', [KoorController::class,'simpanBatas']);





    });
