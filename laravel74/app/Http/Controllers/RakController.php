<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rak;

class RakController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $rak=rak::where('id_rak','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('rak.index',compact(['rak']));
    }

    public function tambah(){
        return view('rak.tambah');
    }

    public function masukan(Request $request){
        rak::create($request->except(['_token','submit']));
        return redirect('/rak');
    }

    public function delete ($id_rak){
        $rak=rak::where ('id_rak',$id_rak);
        $rak->delete();
        return redirect('/rak');
    }

    public function edit($id_rak){
        $rak=rak::where('id_rak',$id_rak)->first();
        return view ('rak.edit',compact(['rak']));
    }
    
    public function update (Request $request,$id_rak){
        $rak=rak::where('id_rak',$id_rak);
        $rak->update($request->except('_token','submit','_method'));
        return redirect('/rak ');
    }
}
