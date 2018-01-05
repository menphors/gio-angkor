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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@index')->name('welcome');
// resource put delete update get show data post request
Route::group(['namespace' => 'Admin', 'prefix' => 'adminz'], function() {
    Route::resource('setting-types', 'SettingTypesController');
    Route::resource('setting-items', 'SettingItemsController');
    Route::resource('level-lists','LevelsController');
    Route::resource('brand-lists','BrandsController');
    Route::resource('order-lists','OrdersController');
    Route::resource('group-category','GroupCategooriesController');
    Route::resource('tracking','TrackingsController');
});