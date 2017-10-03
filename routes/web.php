<?php


Route::get('/', 'MainController@home'); 

Route::get("logout","MainController@cerrar");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
