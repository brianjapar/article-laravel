<?php

use App\Artikel;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController')->name('viewHome');

// Route::get('posts/{slug}','PostController@show');
Route::post('/article/create', 'ArtikelController@create')->name('createArtikel');
Route::get('/page2', 'ArtikelController@show')->name('showArtikel');
Route::get('/articles/edit/{id}','ArtikelController@edit')->name('editArtikel');
Route::post('/articles/update', 'ArtikelController@update');


Route::view('category','category');
Route::view('page3', 'page3');
Route::view('login','login');
Route::view('signup','signup');


