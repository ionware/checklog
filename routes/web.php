<?php


Route::get('/', function () {
    return redirect()->route('login');
});

/*
 * Authorization and Authentication Routes
 * */
Route::get('/login', 'AuthServiceProvider@show')->name('login');
Route::post('/login', 'AuthServiceProvider@create');
Route::get('/logout', 'AuthServiceProvider@destroy');

/*
 * Authenticated Administrators' routes
 * */
Route::get('/home', 'UserController@index')->name('home');