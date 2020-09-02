@extends('layouts.app')

@section('title','Page2')
@section('content')
<div class="artikel">
    <br>
    <div class="nambahartikel">
        <a href="/" style="color: black;">Add Article</a>
    </div>

    <br>
    <table class="table">
        <thead>
          <tr>
            <th >Image</th>
            <th >Judul Artikel</th>
            <th >Isi Artikel</th>
            <th >Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="assets/subs.jpeg" height="250px" width=300px/></td>
            <td>Seratus Ribu Subscriber Jadi Resolusi Baru di Tahun 2020</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere necessitatibus, ut sint, nam nulla optio quis animi in non sapiente odit, dolore perspiciatis praesentium. Placeat amet sunt debitis optio maxime!</td>
            <td><button type="edit" style="background-color: gray;">Edit</button>
                <button type="delete" style="background-color: darkred;">Delete</button>
            </td>
          </tr>
          <tr>
            <td><img src="assets/tokped.png" height="250px" width=300px/></td>
            <td>Tak Hanya BTS , Tokopedia kali ini mengundang Twice , Secret Number , dan juga Rich Brian!</td>
            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis atque in, est quaerat excepturi iure ipsum similique aliquid necessitatibus dicta, numquam magni voluptatibus voluptatem odio ex, tenetur itaque eum accusantium.</td>
            <td><button type="edit" style="background-color: gray;">Edit</button>
                <button type="delete" style="background-color: darkred;">Delete</button>
            </td>
          </tr>
          <tr>
            <td><img src="assets/uang.jpg" height="250px" width=300px/></td>
            <td>Di Ulang Tahun Indonesia yang ke 75 , kini hadir uang pecahan baru bernilai Rp. 75.000,00-</td>
            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eveniet tempora? Minus officiis iste maiores cumque tenetur, delectus dolorem maxime enim itaque asperiores animi nulla! Eum delectus at numquam assumenda.</td>
            <td><button type="edit" style="background-color: gray;">Edit</button>
                <button type="delete" style="background-color: darkred;">Delete</button>
            </td>
          </tr>
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
