<?php

Route::get('/', 'TaskController@index');

// For Notes
Route::get('/create-note', 'NotesController@create');
Route::post('/', 'NotesController@store');

// For Tasks
Route::get('create-task', 'TaskController@create');
Route::post('/', 'TaskController@store');
?>