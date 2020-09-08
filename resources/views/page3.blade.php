@extends('layouts.app')

@section('title','Contact')
@section('content')
    <div class="container">
    <form action="{{ route('subscribers.store')}}" method="POST">
        @csrf
        <input type="email" name="email">
        <input type="submit" value="submit">

       </form>

       @if (session('subscribed'))
            <div class="alert alert-success">
                {{ session('subscribed') }}
            </div>
       @endif
    </div>

    <nav class="page">
        <a href="/" class="btn btn-dark">1</a>
        <a href="/page2" class="btn btn-dark">2</a>
        <a href="/page3" class="btn btn-dark">3</a>
     </nav>
@endsection
