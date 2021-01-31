<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Request;

/* admin route */

Route::namespace('admin')->group(function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::prefix('adminpanel')->group(function () {

            Route::get('/', 'HomeController@index');
            Route::get('index', 'HomeController@index');


            Route::prefix('users')->group(function () {
                Route::get('/all', 'UsersController@index');
                Route::get('/addusers', 'UsersController@viewadd');
                Route::get('/editusers/{id}', 'UsersController@viewedit');
                Route::post('/updateUser', 'UsersController@updateUser');
                route::post('/createUser', 'UsersController@createUser');
                Route::get('/delete/{id}', 'UsersController@deleteUser');
            });

            Route::get('category/all', 'CategoryController@index');
            Route::post('category/addCategory', 'CategoryController@addCategory');
            Route::get('category/editCategory/{id}', 'CategoryController@viewCategory');
            Route::post('category/updateCategory', 'CategoryController@updateCategory');
            Route::get('category/delete/{id}', 'CategoryController@deleteCategory');

        });
    });

});


/* website route */

Route::namespace('Website')->group(function () {
    Route::group(['middleware' => 'www'], function () {

        Auth::routes(['verify' => true]);

        Route::get('/categories', 'categoriesController@index');
        Route::get('/category/{id}/{title}', 'categoriesController@category');

        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/', 'WelcomeController@index');

//
////        Route::prefix('')
//        Route::get('/test/test/user', function (){
//            $test = Request::fullUrl();
//            if ()
////            Route::prefix('user')
//            return $test;
//        });



    });
});
