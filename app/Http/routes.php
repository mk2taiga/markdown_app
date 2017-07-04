<?php
Route::get('/', 'WelcomeController@index');

Route::resource('welcome', 'WelcomeController', ['only' => ['index', 'show', 'create', 'store']]);