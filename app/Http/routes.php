<?php

Route::get('/', 'TaskController@index');

// For Notes
Route::get('/create-note', 'NotesController@create');
Route::post('/notes', 'NotesController@store');
Route::get('/notes', 'NotesController@all');
Route::get('/edit-note/{ID}', 'NotesController@edit');
Route::patch('/note/{ID}', 'NotesController@update');
Route::get('/note/{ID}', 'NotesController@show');
Route::get('/delete-note/{ID}', 'NotesController@delete');

// For Tasks
Route::get('/create-task', 'TaskController@create');
Route::post('/tasks/', 'TaskController@store');
Route::get('/tasks', 'TaskController@all');
Route::get('/edit-task/{id}', 'TaskController@edit');
Route::patch('/task/{id}', 'TaskController@update');
Route::get('/task/{id}', 'TaskController@show');
Route::delete('/task/{id}', 'TaskController@delete');
?>