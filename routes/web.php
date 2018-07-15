<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/newpage','PostController@show');

Route::get('/todos','TodosController@index');