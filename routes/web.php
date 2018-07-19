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



Route::get('/todos/update/{id}',[
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);

Route::get('/todos/completed/{id}',[
    'uses' => 'TodosController@completed',
    'as' => 'todo.completed'
]);



Route::post('/todo/save/{id}',[
    'uses' => 'TodosController@save',
    'as' => 'todo.save'
]);




Route::post('/create/new','TodosController@store');


