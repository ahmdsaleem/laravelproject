<?php


Route::get('/',function()
{
    return view('home');
});
Route::get('/todos','TodosController@index');

Route::post('/create/new','TodosController@store');


