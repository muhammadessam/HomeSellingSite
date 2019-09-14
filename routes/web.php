<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('flyers', 'FlyerController');
Route::post('photos/{flyer}/photos','PhotoController@store');
