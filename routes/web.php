<?php


Route::get('/',function()
{
    return view('home');
});
Route::get('/todos','TodosController@index');


Route::get('/todos/delete/{id}',[
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);



Route::post('/create/new','TodosController@store');


