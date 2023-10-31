<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggota;

class AnggotaController extends Controller
{
    //fungsi untuk menampilkan semua data di dalam tabel 
    /*public function index(Request $request){
        $anggota=anggota::all();
        return view ('anggota.index',compact(['anggota']));
    }*/

    //script untuk mencari data
    public function index(Request $request){
        $keyword=$request->keyword;
        $anggota=anggota::where('id_anggota','LIKE','%'.$keyword.'%')
                        //cari sesuai keyword
                        ->orWhere('nama_anggota','LIKE','%'.$keyword.'%')
                        ->orWhere('jk_anggota','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('anggota.index',compact(['anggota']));
    }

    //untuk tombol tambah data yg akan mnambahkan formulir
    public function tambah(){
        return view('anggota.tambah');
    }

    //untuk tombol simpan yang akan mengirim data masukan ke DB
    public function masukan(Request $request){
        anggota::create($request->except(['_token','submit']));
        return redirect('/anggota');
    }

    public function delete ($id_anggota){
        $anggota=anggota::where ('id_anggota',$id_anggota);
        $anggota->delete();
        return redirect('/anggota');
    }
    public function edit($id_anggota){
        $anggota=Anggota::where('id_anggota',$id_anggota)->first();
        return view ('anggota.edit',compact(['anggota']));
    }
    public function update (Request $request,$id_anggota){
        $anggota=anggota::where('id_anggota',$id_anggota);
        $anggota->update($request->except('_token','submit','_method'));
        return redirect('/anggota');
    }
}
