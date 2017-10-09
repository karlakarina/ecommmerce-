<?php


Route::get('/', 'MainController@home'); 
Route::resource('products','ProductsController');

Route::get("logout","MainController@cerrar");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
