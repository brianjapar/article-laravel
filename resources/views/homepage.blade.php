@extends('layouts.app')

@section('title','HomePage')
@section('content')

    <div class="artikel">
        <form method="POST" action="{{route('createArtikel')}}" enctype="multipart/form-data">
        @csrf
            <fieldset>
            <legend><h2>Welcome to our HomePage</h1></legend>
                <p>We Hope You Already Joined Us </p>
                <p>by <span><strong>Signing Up</strong><span> first.</p>
                <sub>If haven't you can Sign In <a class="nav-link" href="{{ route('register') }}">here</a></sub>




            </fieldset>

        </form>
        <br><br>

        <h3>Create You Article Now </h3>
        <p><sub>Page1</sub></p>
        <a href="/page1" class="btn btn-secondary">Create Article</a>
        <br><br>
        <h3>See All Article  </h3>
        <p><sub>Page2</sub></p>
        <a href="/page2" class="btn btn-secondary">Show Article</a>
        <br><br>
        <h3>See Your Article  </h3>
        <p><sub>Page3</sub></p>
        <a href="/page2" class="btn btn-secondary">Your Article</a>
        <br><br>
    </div>



    <nav class="page">
        <a href="/page1" class="btn btn-dark">1</a>
        <a href="/page2" class="btn btn-dark">2</a>
        <a href="/page3" class="btn btn-dark">3</a>
    </nav>
@endsection
