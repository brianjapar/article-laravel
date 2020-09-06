<?php

use App\Artikel;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController')->name('viewHome');

Route::post('/article/create', 'ArtikelController@create')->name('createArtikel');
Route::get('/page2', 'ArtikelController@show')->name('showArtikel');
Route::get('/article/edit/{id}','ArtikelController@edit')->name('editArtikel');
Route::patch('/article/update/{id}', 'ArtikelController@update')->name('updateArtikel');
Route::get('/article/delete/{id}', 'ArtikelController@delete')->name('deleteArtikel');
Route::get('/page3/{id}', 'ArtikelController@showData')->name('showDataArtikel');
Route::get('/layouts/app', 'HomeController@index');
Route::post('/comment/store', 'CommentController@store' )->name('storeComment');
Route::post('/reply/store', 'CommentController@storeReplies')->name('storeReply');
Route::view('category','category');

// Route::get('posts/{slug}','PostController@show');

Auth::routes();
