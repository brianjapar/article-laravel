<?php

use App\Artikel;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController')->name('viewHome');

// Route::get('posts/{slug}','PostController@show');
Route::post('/article/create', 'ArtikelController@create')->name('createArtikel');
Route::get('/page2', 'ArtikelController@show')->name('showArtikel');
Route::get('/article/edit/{id}','ArtikelController@edit')->name('editArtikel');
Route::post('/article/update/{id}', 'ArtikelController@update')->name('updateArtikel');
Route::get('/article/delete/{id}', 'ArtikelController@delete')->name('deleteArtikel');


Route::view('category','category');
Route::view('page3', 'page3');
Route::view('login','login');
Route::view('signup','signup');


