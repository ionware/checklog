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
Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/home', 'UserController@index')->name('home');

    Route::get('/settings', 'UserController@setting');

    Route::post('/settings', 'UserController@update');

    Route::get('settings/account', function () {
        return view('admin.account');
    });

    Route::post('/settings/account', 'UserController@create');
});

/*
 * Patient Operation Routes
 * */
Route::group(['middleware' => ["web", "auth"]], function () {

    Route::get('/patient/search', 'PatientsController@search');

    Route::get('/patient/{id}/checkin', 'CheckInController@show');

    Route::post('/patient/{id}/checkin', 'CheckInController@create');

    Route::get('/patient/{id}', 'PatientsController@show');

    Route::get('/patient/{id}/edit', 'PatientsController@edit');

    Route::post('/patient/{id}/edit', 'PatientsController@update');

    Route::post('/patient', 'PatientsController@create');

});
