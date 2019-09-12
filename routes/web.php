<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['middleware' => 'auth'],function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'product'],function (){
        Route::get('/add', 'ProductController@add')->name('product.add');
        Route::get('/list', 'ProductController@index')->name('product.list');
    });

    Route::group(['prefix' => 'category'],function (){
        Route::post('/save', 'CategoryController@save')->name('category.save');
        Route::get('/add', 'CategoryController@add')->name('category.add');
        Route::get('/list', 'CategoryController@index')->name('category.list');
    });
});
