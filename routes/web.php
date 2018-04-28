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

    Route::get('/patient/search', 'PatientsController@search');

    Route::get('/patient/{id}', 'PatientsController@show');

    Route::get('/patient/{id}/edit', 'PatientsController@edit');

    Route::post('/patient/{id}/edit', 'PatientsController@update');

    Route::post('/patient', 'PatientsController@create');

});
