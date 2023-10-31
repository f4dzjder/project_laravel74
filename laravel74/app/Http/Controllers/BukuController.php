<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;


class BukuController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $buku=buku::where('id_buku','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('buku.index',compact(['buku']));
    }

    //untuk tombol tambah data yg akan mnambahkan formulir
    public function tambah(){
        return view('buku.tambah');
    }

    //untuk tombol simpan yang akan mengirim data masukan ke DB
    public function masukan(Request $request){
        buku::create($request->except(['_token','submit']));
        return redirect('/buku');
    }

    public function delete ($id_buku){
        $buku=buku::where ('id_buku',$id_buku);
        $buku->delete();
        return redirect('/buku');
    }
    public function edit($id_buku){
        $buku=buku::where('id_buku',$id_buku)->first();
        return view ('buku.edit',compact(['buku']));
    }
    public function update (Request $request,$id_buku){
        $buku=buku::where('id_buku',$id_buku);
        $buku->update($request->except('_token','submit','_method'));
        return redirect('/buku');
    }
}
