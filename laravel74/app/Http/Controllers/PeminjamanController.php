<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;

class PeminjamanController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $peminjaman=peminjaman::where('id_peminjaman','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('peminjaman.index',compact(['peminjaman']));
    }

    public function tambah(){
        return view('peminjaman.tambah');
    }

    public function masukan(Request $request){
        peminjaman::create($request->except(['_token','submit']));
        return redirect('/peminjaman');
    }

    public function delete ($id_peminjaman){
        $peminjaman=peminjaman::where ('id_peminjaman',$id_peminjaman);
        $peminjaman->delete();
        return redirect('/peminjaman');
    }

    public function edit($id_peminjaman){
        $peminjaman=peminjaman::where('id_peminjaman',$id_peminjaman)->first();
        return view ('peminjaman.edit',compact(['peminjaman']));
    }
    
    public function update (Request $request,$id_peminjaman){
        $peminjaman=peminjaman::where('id_peminjaman',$id_peminjaman);
        $peminjaman->update($request->except('_token','submit','_method'));
        return redirect('/peminjaman');
    }
}
