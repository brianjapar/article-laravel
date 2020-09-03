@extends('layouts.app')

@section('title','Page2')
@section('content')
<div class="artikel">

    <br>
    <div class="nambahartikel">
        <a href="/" style="color: black;">Add Article</a>
    </div>

    <br>
    <table class="table">
        <thead>
          <tr>
            <th >Gambar</th>
            <th >Judul Artikel</th>
            <th >Isi Artikel</th>
            <th >Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)

            <tr>
                <td><img src="{{ asset('storage/'.$article->file) }}" alt="{{$article->file}}" height="250px" width=300px/></td>
                <td>{{ $article->judul_artikel }}</td>
                <td>{{ $article->isi_artikel }}</td>
                <td>
                    <a href="/article/edit/{{ $article->id_article }}" class="btn btn-xs btn-primary">Edit</a>
                    {{-- <button type="edit" style="background-color: gray;">Edit</button> --}}
                    <button type="delete" style="background-color: darkred;">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <br>
</div>

<nav class="page">
    <a href="/">1</a>
    <a href="/page2" >2</a>
    <a href="/page3" >3</a>
 </nav>
@endsection
