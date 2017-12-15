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
    return view('homepages.homepage');
});
Route::get('/homepage', function () {
    return view('homepages.homepage');
});
Route::get('/testing', function () {
    return view('testing.index');
});
Route::resource('pd',"ProductController");

Route::resource('/pd',"ProductController");
Route::post('/insert',"ProductController@insert");
Auth::routes();

Route::get('/show',"ProductController@show");
// Route::get('delete{id}',"ProductController@destroy");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/delete/{id}', 'ProductController@destroy');
Route::get('/edit/{id}', 'ProductController@edit');
Route::get('/update', 'ProductController@update');