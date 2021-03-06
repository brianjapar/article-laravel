@extends('layouts.app')

@section('title','Edit')
@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success">
            <span>{{Session::get('success')}}</span>
        </div>

    @endif

    @if(!$errors->isEmpty())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif


        <div class="artikel">

            <form method="POST" action="/article/update/{{$articles->id}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                <fieldset>
                  <legend>Edit Artikel</legend>

                    <p>Nama Penulis  : <input type="text" name="nama_penulis" value="{{old('nama_penulis') ?? $articles->nama_penulis}}"></p>
                    <p>Judul Artikel : <input type="text" name="judul_artikel" value="{{old('judul_article') ?? $articles->judul_artikel}}"></p>

                    <p>
                      Isi Artikel Anda :<br>
                      <textarea rows='10' cols='80' placeholder="Tulis artikel anda di sini" name="isi_artikel" value="{{old('isi_article') ?? $articles->isi_artikel}}">
                        {{old('isi_article') ?? $articles->isi_artikel}}
                    </textarea>
                    </p>
                    <p>Upload <input type='file' name='file' />
                        <img class="w-25 h-25" src="{{asset('storage/'.$articles->file)}}" alt="image">
                    </p>

                    <p><input type="submit" value="Submit"></p>
                    </fieldset>

              </form>
              <br>
              <br>
        </div>

        <nav class="page">
            <a href="/" class="btn btn-dark">1</a>
            <a href="/page2" class="btn btn-dark">2</a>
            <a href="/page3" class="btn btn-dark">3</a>
         </nav>



@endsection
