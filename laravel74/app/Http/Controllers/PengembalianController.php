<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengembalian;

class PengembalianController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $pengembalian=pengembalian::where('id_pengembalian','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('pengembalian.index',compact(['pengembalian']));
    }

    public function tambah(){
        return view('pengembalian.tambah');
    }
    
    public function masukan(Request $request){
        pengembalian::create($request->except(['_token','submit']));
        return redirect('/pengembalian');
    }

    public function delete ($id_pengembalian){
        $pengembalian=pengembalian::where ('id_pengembalian',$id_pengembalian);
        $pengembalian->delete();
        return redirect('/pengembalian');
    }

    public function edit($id_pengembalian){
        $pengembalian=pengembalian::where('id_pengembalian',$id_pengembalian)->first();
        return view ('pengembalian.edit',compact(['pengembalian']));
    }
    
    public function update (Request $request,$id_pengembalian){
        $pengembalian=pengembalian::where('id_pengembalian',$id_pengembalian);
        $pengembalian->update($request->except('_token','submit','_method'));
        return redirect('/pengembalian');
    }
}
