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

Route::get('/','PostController@index' );

Route::get('/post','PostController@index');


Route::group([
    'prefix' => 'posts',
    'as'     => 'posts.'
    ],function (){
//    Route::view('/', 'posts.index')->name('list');
    Route::get('/','PostController@index');
    Route::get('create','PostController@create')->name('create');
    Route::post('/store','PostController@store')->name('store');
    Route::get('category','CategoryController@index');
    Route::get('{post}/edit', 'PostController@edit')->name('edit');
    Route::post('{post}/destroy', 'PostController@destroy')->name('destroy');


}
);



