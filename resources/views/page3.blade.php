@extends('layouts.app')

@section('title','Page3')
@section('content')
    <div class="artikel">

        <h1>{{ $articles->judul_artikel }}</h1>
        <p>dibuat oleh: <span>{{ $articles->nama_penulis }}</span></p>
        <img src="{{ asset('storage/'.$articles->file) }}" alt="{{$articles->file}}" />
        <div class="isiartikel">

            <p>{{ $articles->isi_artikel }}</p>
            <br><br>

        </div>
        <h3>Terpopuler</h3>
        <br>
        <table class="table">

            <thead>
            <tr>
                @foreach ($new_articles as $article)
                <th>{{ $article->judul_artikel }}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach ($new_articles as $article)
                <td><img src="{{ asset('storage/'.$article->file) }}" alt="{{$article->file}}" height="200px" width=300px/></td>
                @endforeach
            </tr>
            </tbody>

        </table>
        <br><br>
    </div>

    <nav class="page">
        <a href="/" class="btn btn-dark">1</a>
        <a href="/page2" class="btn btn-dark">2</a>
        <a href="/page3" class="btn btn-dark">3</a>
    </nav>
@endsection
