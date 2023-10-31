<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\petugas;

class PetugasController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $petugas=petugas::where('id_petugas','LIKE','%'.$keyword.'%')
                        //cari sesuai keyword
                        ->orWhere('nama_petugas','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('petugas.index',compact(['petugas']));
    }

       //untuk tombol tambah data yg akan mnambahkan formulir
       public function tambah(){
        return view('petugas.tambah');
    }

    //untuk tombol simpan yang akan mengirim data masukan ke DB
    public function masukan(Request $request){
        petugas::create($request->except(['_token','submit']));
        return redirect('/petugas');
    }

    public function delete ($id_petugas){
        $petugas=petugas::where ('id_petugas',$id_petugas);
        $petugas->delete();
        return redirect('/petugas');
    }
    public function edit($id_petugas){
        $petugas=petugas::where('id_petugas',$id_petugas)->first();
        return view ('petugas.edit',compact(['petugas']));
    }
    public function update (Request $request,$id_petugas){
        $petugas=petugas::where('id_petugas',$id_petugas);
        $petugas->update($request->except(['_token','submit','_method']));
        return redirect('/petugas');
    }
}
