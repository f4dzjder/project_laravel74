<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

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
    return view('index');
}); 
///test
///////////////////////////////////////////////////////////////////////////////////
Route::get('/anggota',[AnggotaController::class,'index']);

//route untuk menambah data tabel anggota
Route::get('/anggota/tambah',[AnggotaController::class,'tambah']);

//untk kirim data anggota
Route::post('/anggota/masukan',[AnggotaController::class,'masukan']);

//untuk hapus data anggota
Route::delete('/anggota/{id_anggota}',[AnggotaController::class,'delete']);

//untuk menampilkan formulir edit anggota
Route::get('/anggota/{id_anggota}/edit',[AnggotaController::class,'edit']);

//memyimpan data yg sudah di update file angggota
Route::put('/anggota/{id_anggota}',[AnggotaController::class,'update']);
///////////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////
Route::get('/petugas',[PetugasController::class,'index']);
Route::get('/petugas/tambah',[PetugasController::class,'tambah']);
Route::post('/petugas/masukan',[PetugasController::class,'masukan']);
Route::delete('/petugas/{id_petugas}',[PetugasController::class,'delete']);
Route::get('/petugas/{id_petugas}/edit',[PetugasController::class,'edit']);
Route::put('/petugas/{id_petugas}',[PetugasController::class,'update']);
///////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////
Route::get('/buku',[BukuController::class,'index']);
Route::get('/buku/tambah',[BukuController::class,'tambah']);
Route::post('/buku/masukan',[BukuController::class,'masukan']);
Route::delete('/buku/{id_buku}',[BukuController::class,'delete']);
Route::get('/buku/{id_buku}/edit',[BukuController::class,'edit']);
Route::put('/buku/{id_buku}',[BukuController::class,'update']);
///////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////
Route::get('/rak',[RakController::class,'index']);
Route::get('/rak/tambah',[RakController::class,'tambah']);
Route::post('/rak/masukan',[RakController::class,'masukan']);
Route::delete('/rak/{id_rak}',[RakController::class,'delete']);
Route::get('/rak/{id_rak}/edit',[RakController::class,'edit']);
Route::put('/rak/{id_rak}',[RakController::class,'update']);
///////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////
Route::get('/peminjaman',[PeminjamanController::class,'index']);
Route::get('/peminjaman/tambah',[PeminjamanController::class,'tambah']);
Route::post('/peminjaman/masukan',[PeminjamanController::class,'masukan']);
Route::delete('/peminjaman/{id_peminjaman}',[PeminjamanController::class,'delete']);
Route::get('/peminjaman/{id_peminjaman}/edit',[PeminjamanController::class,'edit']);
Route::put('/peminjaman/{id_peminjaman}',[PeminjamanController::class,'update']);
///////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////
Route::get('/pengembalian',[PengembalianController::class,'index']);
Route::get('/pengembalian/tambah',[PengembalianController::class,'tambah']);
Route::post('/pengembalian/masukan',[PengembalianController::class,'masukan']);
Route::delete('/pengembalian/{id_pengembalian}',[PengembalianController::class,'delete']);
Route::get('/pengembalian/{id_pengembalian}/edit',[PengembalianController::class,'edit']);
Route::put('/pengembalian/{id_pengembalian}',[PengembalianController::class,'update']);
///////////////////////////////////////////////////////////////////////////////////
