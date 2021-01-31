<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('create', 'UserController@register');
Route::get('register', 'UserController@register');

Route::post('/allCategories/create', 'CategoriesController@store');
Route::resource('/allCategories', 'CategoriesController');
Route::post('/allCategories/{id}', 'CategoriesController@update');
