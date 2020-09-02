@extends('layouts.app')

@section('title','Login')
@section('content')
<div class="artikel">

    <form method="POST" enctype="multipart/form-data">
        <fieldset>
          <legend>Login Data</legend>
            <br>
            <p>Username : <input type="text" name="username" placeholder="Masukkan Username Anda"></p>
            <p>Password : <input type="text" name="password" placeholder="Masukkan Password Anda"></p>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

            </fieldset>
      </form>

 </div>
@endsection
