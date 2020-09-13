<?php


use Illuminate\Support\Facades\Route;

// Auth::routes(['verify' => true]);
Auth::routes();

// Route::get('/', 'HomeController')->middleware(['auth','verified'])->name('viewHome');
Route::get('/', 'HomeController')->name('viewHome');
Route::prefix('article')->middleware('auth')->group(function(){
    Route::post('create', 'ArtikelController@create')->name('createArtikel');
    Route::get('edit/{id}','ArtikelController@edit')->middleware('member')->name('editArtikel');
    Route::patch('update/{id}', 'ArtikelController@update')->middleware('member')->name('updateArtikel');
    Route::get('delete/{id}', 'ArtikelController@delete')->name('deleteArtikel');
});

Route::middleware('auth')->group(function(){
    Route::get('/page3','ArtikelController@showUserArticle')->name('showUserArtikel');
    Route::post('/comment/store', 'CommentController@store' )->name('storeComment');
    Route::post('/reply/store', 'CommentController@storeReplies')->name('storeReply');
});

Route::get('/page2', 'ArtikelController@show')->name('showArtikel');
Route::get('/showData/{id}', 'ArtikelController@showData')->name('showDataArtikel');
Route::get('/layouts/app', 'HomeController@index');
Route::view('category','category');
Route::view('homepage','homepage');
Route::get('/mail','ArtikelController@sendMail')->name('sendMail');

Route::get('/email', function () {
    return view('send_email');
});
Route::post('/sendEmail', 'EmailController@sendEmail');


