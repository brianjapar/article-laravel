@extends('layouts.app')

@section('title','Home')
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


    <div class="container">
        <div class="artikel">
            <form method="POST" action="{{route('createArtikel')}}" enctype="multipart/form-data">
               @csrf
                <fieldset>
                  <legend>Submit Artikel</legend>

                    <p>Nama Penulis  : <input type="text" name="nama_penulis"></p>
                    <p>Judul Artikel : <input type="text" name="judul_artikel"></p>

                    <p>
                      Isi Artikel Anda :<br>
                      <textarea rows='10' cols='80' placeholder="Tulis artikel anda di sini" name="isi_artikel"></textarea>
                    </p>
                    <p>Upload <input type='file' name='file' /></p>
                    <p><input type="submit" value="Submit"></p>
                    </fieldset>

              </form>
              <br>
              <br>
        </div>

        <nav class="page">
            <a href="/" >1</a>
            <a href="/page2" >2</a>
            <a href="/page3" >3</a>
         </nav>
    </div>


@endsection
