<?php

use App\Artikel;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/', 'HomeController')->middleware(['auth','verified'])->name('viewHome');

Route::prefix('article')->group(function(){
    Route::post('create', 'ArtikelController@create')->middleware(['auth','admin'])->name('createArtikel');
    Route::get('edit/{id}','ArtikelController@edit')->name('editArtikel');
    Route::patch('update/{id}', 'ArtikelController@update')->name('updateArtikel');
    Route::get('delete/{id}', 'ArtikelController@delete')->name('deleteArtikel');
});

Route::get('/page2', 'ArtikelController@show')->name('showArtikel');
Route::get('/showData/{id}', 'ArtikelController@showData')->name('showDataArtikel');
Route::get('/layouts/app', 'HomeController@index');
Route::post('/comment/store', 'CommentController@store' )->name('storeComment');
Route::post('/reply/store', 'CommentController@storeReplies')->name('storeReply');
Route::view('category','category');

//email
Route::get('/mail','ArtikelController@sendMail')->name('sendMail');

Route::get('/email', function () {
    return view('send_email');
});
Route::post('/sendEmail', 'EmailController@sendEmail');

// Route::get('posts/{slug}','PostController@show');


