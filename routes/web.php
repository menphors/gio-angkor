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
Auth::routes();
Route::get('/', function () {
    return view('front.homepages.homepage');
});
// resource put delete update get show data post request
Route::group(['namespace' => 'Admin', 'prefix' => 'adminz'], function() {
    Route::resource('user-account','AccountController');
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
    Route::resource('products','ProductController');
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
    Route::get('store', function () {
        return view('front.StorePage.store');
    });
    Route::get('product-add-to-card', function () {
        return view('front.pro_detail.product-order');
    });
});
Route::get('upload','UploadController@showUpload');
Route::post('upload','UploadController@saveUpload');

Route::get('/product-list', function () {
    return view('login_form.login');
});
Route::get('/login', function () {
   return view('login_form.login');
});
Route::get('/login', function (){
    return view('form_login.Login');
});
Route::get('/sign_in', function (){
    return view('form_login.sign_in');
});
Route::get('/categories_collapse', function (){
    return view('categories.categories_collapse');
});
