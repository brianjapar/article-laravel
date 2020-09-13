@extends('layouts.app')

@section('title','Page2')
@section('content')


<div class="artikel">
    @csrf
    <h2>All Article List</h2>
    <br>
    <div >
        <a href="/page1" class="btn btn-secondary">Add Article</a>
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
            @guest
                @foreach ($articles as $article)

                <tr>
                    <td><img src="{{ asset('storage/'.$article->file) }}" alt="{{$article->file}}" height="250px" width=300px/></td>
                    <td><a href="{{ route('showDataArtikel',$article->id) }}">{{ $article->judul_artikel }}</a></td>
                    <td>{{ $article->isi_artikel }}</td>
                    <td>
                    </td>
                </tr>
                @endforeach
            @else
                @foreach ($articles as $article)

                <tr>
                    <td><img src="{{ asset('storage/'.$article->file) }}" alt="{{$article->file}}" height="250px" width=300px/></td>
                    <td><a href="{{ route('showDataArtikel',$article->id) }}">{{ $article->judul_artikel }}</a></td>
                    <td>{{ $article->isi_artikel }}</td>
                    <td>
                        @if (Auth::user()->type == 'admin')
                        <a href="/article/delete/{{$article->id}}" class="btn btn-danger">Delete</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            @endguest

        </tbody>
      </table>

      <br>
</div>
{{ $articles->links() }};
<nav class="page">
    <a href="/" class="btn btn-dark">1</a>
    <a href="/page2" class="btn btn-dark">2</a>
    <a href="/page3" class="btn btn-dark">3</a>
 </nav>
@endsection
