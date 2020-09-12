@extends('layouts.app')

@section('title','showData')
@section('content')
    <div class="artikel">
        <a href="{{ route('sendMail')}}">
            <svg width="15" height="15" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
              </svg>
            <strong>Send Email</strong>
        </a>
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

            @include('comment.comment',['comments'=>$articles->comments,'article_id'=>$articles->id])
            <br>

            <h4>Add comment</h4>
            <form method="post" action="{{ route('storeComment') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="comment_body" class="form-control" />
                    <input type="hidden" name="article_id" value="{{ $articles->id }}" />
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Add Comment" />
                </div>
            </form>

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
