@extends('layouts.app')

@section('title','SignUp')
@section('content')
<div class="artikel">
    <form method="GET" enctype="multipart/form-data">
        <fieldset>
          <legend>SignUp</legend>
            <br>
            <p>Nama Lengkap : <input type="text" name="nama" placeholder="Masukkan Nama Anda"></p>
            <p>Username : <input type="text" name="username" placeholder="Masukkan Username Anda"></p>
            <p>Email : <input type="text" name="email" placeholder="Masukkan Alamat Email Anda"></p>
            <p>Password : <input type="text" name="password" placeholder="Masukkan Password Anda"></p>
            <p>Confrim Password : <input type="text" name="confrimpassword" placeholder="Masukkan Kembali Password Anda"></p>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

            </fieldset>
      </form>

 </div>
@endsection
