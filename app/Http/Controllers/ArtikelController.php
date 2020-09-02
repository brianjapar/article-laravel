<?php

namespace App\Http\Controllers;
use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{


    public function create(Request $request){
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
