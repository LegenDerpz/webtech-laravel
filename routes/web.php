<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');

Route::get('/inventory', 'App\Http\Controllers\InventoryController@index');
Route::get('/inventory/update/{id}', 'App\Http\Controllers\InventoryController@edit');
Route::put('/inventory/update/{id}', 'App\Http\Controllers\InventoryController@update');

Route::get('/hello', 'App\Http\Controllers\HelloController@index');

Route::get('/categories', 'App\Http\Controllers\CategoryController@index');
Route::get('/categories/update/{id}', 'App\Http\Controllers\CategoryController@edit');
Route::put('/categories/update/{id}', 'App\Http\Controllers\CategoryController@update');

Route::get('/add-items', 'App\Http\Controllers\AddItemController@index');