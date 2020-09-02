<?php

namespace App\Http\Controllers;
use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{



    public function create(Request $request){
        $data = $request->all();
        $validator = Validator::make($data,[
            'nama_penulis' => 'required|string|min:5',
            'judul_artikel' => 'required|string',
            'isi_artikel' => 'required|string|min:10',
            'file' => 'required|image|max:10240'

        ]);
        if($validator->fails()){
            return redirect(route('viewHome'))->withErrors($validator)->withInput();
        }

        $path = $request->file('file')->store('image_assets');
        Artikel::create([
            'nama_penulis'=> $request->nama,
            'judul_artikel'=> $request->judul,
            'isi_artikel'=> $request->isiArtikel,
            'file'=> $path
        ]);
        return redirect(route('viewHome'))->with('success','ini Berhasil terikirim ke database');
    }



    public function show(Request $request){
        $articles = Artikel::all();

        return view('page2',compact('articles'));
    }
}
