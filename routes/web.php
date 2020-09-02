<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController')->name('viewHome');

// Route::get('posts/{slug}','PostController@show');
Route::post('/article/create', 'ArtikelController@create')->name('createArtikel');
Route::view('contact', 'contact');
Route::get('/page2', 'ArtikelController@show')->name('showArtikel');
Route::view('page3', 'page3');
Route::view('login','login');
Route::view('signup','signup');
// Route::view('about','about');
// Route::view('category','category');

