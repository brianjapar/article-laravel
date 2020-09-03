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
            'judul_artikel' => 'required|string|min:5',
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
        return redirect(route('viewHome'))->with('success','Data Berhasil terkirim ke Database');
    }



    public function show(Request $request){
        $articles = Artikel::all();

        return view('page2',compact('articles'));
    }

    public function edit($id){
        $article = DB::table('articles')->where('id_article',$id)->first();

        return view('edit',compact('article'));
    }

    public function update(Request $request){
        $data = $request->all();
        $validator = Validator::make($data,[
            'nama_penulis' => 'required|string|min:5',
            'judul_artikel' => 'required|string|min:5',
            'isi_artikel' => 'required|string|min:10',
            'file' => 'required|image|max:10240'

        ]);
        if($validator->fails()){
            return redirect(route('viewHome'))->withErrors($validator)->withInput();
        }

        $path = $request->file('file')->store('image_assets');
        DB::table('articles')->where('id_article',$request -> id)-> upddate([
            'nama_penulis'=> $request->nama,
            'judul_artikel'=> $request->judul,
            'isi_artikel'=> $request->isiArtikel,
            'file'=> $path
        ]);
        return redirect(route('viewHome'))->with('success','Data Artikel Berhasil diUbah');
    }
}
