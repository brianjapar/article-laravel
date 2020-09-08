@extends('layouts.app')

@section('title','showData')
@section('content')
    <div class="artikel">

        <h1>{{ $articles->judul_artikel }}</h1>
        <p><sub>dibuat oleh: <span>{{ $articles->nama_penulis }}</span></sub></p>
        <img class="w-50 h-50" src="{{ asset('storage/'.$articles->file) }}" alt="{{$articles->file}}" />
        <div class="isiartikel">

            <p>{{ $articles->isi_artikel }}</p>
            <br><br>

        </div>

    </div>

    <div style="background: burlywood">
        <div class="container">
            <br>


            <h4>Display Comments</h4>
            @foreach($articles->comments as $comment)
                <div class="display-comment">
                    <strong>{{ $comment->user->name }}</strong>
                    <p>{{ $comment->body }}</p>
                </div>
            @endforeach
            @include('comment.comment',['comments'=>$articles->comments,'article_id'=>$articles->id])
            <br>

            <h4>Add comment</h4>
            <form method="post" action="/comment/store">
                @csrf
                <div class="form-group">
                    <input type="text" name="comment_body" class="form-control" />
                    <input type="hidden" name="article_id" value="{{ $articles->id }}" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Add Comment" />
                </div>
            </form>
                {{-- <h2>Komentar</h2>

            <form action="{{ route('storeComment') }}" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="comment" id="" class="form-control" rows="10" placeholder="Write your comment ..."></textarea>
                    <input type="hidden" name="post_id" value="{{ $articles->id }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> --}}
            <br>
        </div>
    </div>


    <div class="artikel">
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
