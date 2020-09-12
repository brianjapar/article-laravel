@extends('layouts.app')

@section('title','Page3')
@section('content')
    {{-- @if (auth()->user()->id==$articles->user_id) --}}
    <div class="artikel">
            @csrf
            <h2>My Article List</h2>

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
                    <td><a href="{{ route('showDataArtikel',$article->id) }}">{{ $article->judul_artikel }}</a></td>
                    <td>{{ $article->isi_artikel }}</td>
                    <td>
                        <a href="/article/edit/{{$article->id}}" class="btn btn-warning">Edit</a>
                        <a href="/article/delete/{{$article->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>

          <br>
    </div>
    <nav class="page">
        <a href="/page1" class="btn btn-dark">1</a>
        <a href="/page2" class="btn btn-dark">2</a>
        <a href="/page3" class="btn btn-dark">3</a>
     </nav>
@endsection
