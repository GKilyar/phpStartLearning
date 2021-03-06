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

Route::get('/','PageController@index');
Route::get('/asd','StaticPagesController@asd')->name('asd');

// Route::get('/hello', function () {
//     return '<h2>Hello world!!!</h2>';
// });


Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/about',function(){
//     return view('pages.about');
// });


Route::get('/about','PageController@about');
Route::get('/service','PageController@service');


Route::resource('posts','PostController');
