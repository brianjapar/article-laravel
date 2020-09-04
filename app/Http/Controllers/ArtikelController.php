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
            'nama_penulis'=> $request->nama_penulis,
            'judul_artikel'=> $request->judul_artikel,
            'isi_artikel'=> $request->isi_artikel,
            'file'=> $path
        ]);
        return redirect(route('viewHome'))->with('success','Data Berhasil terkirim ke Database');
    }



    public function show(Request $request){
        $articles = Artikel::all();

        return view('page2',compact('articles'));
    }

    public function edit($id){
       $articles = Artikel::find($id);

        return view('article_edit',compact('articles'));
    }

    public function update($id,Request $request){
        $data = $request->all();
        $validator = Validator::make($data,[
            'nama_penulis' => 'required|string|min:5',
            'judul_artikel' => 'required|string|min:5',
            'isi_artikel' => 'required|string|min:10',
            'file' => 'required|image|max:10240'

        ]);
        if($validator->fails()){
            return redirect('/article');
        }


        $article = Artikel::find($id);

        $article->nama_penulis = $request->nama_penulis;
        $article->judul_artikel = $request->judul_artikel;
        $article->isi_artikel = $request->isi_artikel;
        if($request->has('file')){
            $path=$request->file('file')->store('image_assets');
            $article->file=$path;
        }
        $article->save();
        return redirect('/article')->with('success','Data Artikel Berhasil diUbah');
    }


    public function delete($id){
        $article = Artikel::find($id);
        $article->delete();
        return redirect()->back();
    }
}
