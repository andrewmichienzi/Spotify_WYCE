<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/setlist', function() {
	return view('setlist.index');
});

Route::get('/login', 'SessionController@index');

Route::post('/login', 'SessionController@create');

Route::get('/playlists/create', 'PlaylistController@create');

Route::get('/playlists/', 'PlaylistController@index');


Route::get('/test', 'TestController@index');

