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
Route::group(['middleware' => ["web", "auth"]], function () {

    Route::get('/home', 'UserController@index')->name('home');

    Route::get('/patient/{id}', 'PatientsController@show');

    Route::post('/patient', 'PatientsController@create');

});
