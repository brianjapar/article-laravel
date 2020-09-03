@extends('layouts.app')

@section('title','Page2')
@section('content')
<div class="artikel">
    @csrf
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
                    <a href="/Artikel/edit{{$article->id}}" class="btn btn-warning">Edit</a>
                    <a href="/Artikel/delete{{$article->id}}" class="btn btn-danger">Delete</a>

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
