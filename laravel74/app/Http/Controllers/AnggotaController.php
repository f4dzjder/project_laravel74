<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggota;

class AnggotaController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $anggota=anggota::where('id_anggota','LIKE','%'.$keyword.'%')
                        //cari sesuai keyword
                        ->orWhere('nama_anggota','LIKE','%'.$keyword.'%')
                        ->orWhere('jk_anggota','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('anggota.index',compact(['anggota']));
    }
  
    public function tambah(){
        return view('anggota.tambah');
    }
    
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
