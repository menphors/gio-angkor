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
Route::get('/store', function () {
    return view('StorePage.store');
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
    Route::resource('log-activity','LogActivitysController');
    Route::resource('group-category','GroupCategoryController');
    Route::resource('category','CategoryController');
    Route::get('category-test','CategoryController@testCat');
    Route::resource('subcategory','SubCategoryController');
    Route::resource('tracking','TrackingsController');
    Route::resource('promotions','PromotionsController');
    Route::resource('discount','DiscountsController');
    Route::resource('gallery','GalleriesController');
    Route::resource('disput','DisputController');
    Route::get('store-report','StoreReportsController@index');
    Route::get('users-report','UsersReportsController@index');
    Route::get('export','UsersReportsController@export_excel');
    Route::get('export-user','UsersReportsController@user_export');
});


Route::group(['namespace' => 'front', 'prefix' => 'frontend'], function() {
    Route::get('order','OrderController@index');
    Route::get('detail','StorepageController@index');
});
Route::get('upload','UploadController@showUpload');
Route::post('upload','UploadController@saveUpload');