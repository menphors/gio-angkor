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
/* Default Page and Authentication*/
Auth::routes();

Route::get('/', function () {
    return view('front.homepages.homepage');
});
/*Route Admin page*/
// resource put delete update get show data post request
Route::group(['namespace' => 'Admin', 'prefix' => 'adminz'], function() {
    Route::get('/','StoreReportsController@index');
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
    Route::resource('order','OrdersController');
});

/*Route Frontend*/
Route::group(['namespace' => 'front', 'prefix' => 'frontend'], function() {
    Route::get('order','OrderController@index');
    Route::get('detail','ProductController@index');
    Route::get('show-product-grid','ProductController@show');
    Route::get('store', function () {
        return view('front.StorePage.store');
    });
    Route::get('product-add-to-card', function () {
        return view('front.pro_detail.product-order');
    });
    Route::get('dashboard-user', function () {
        return view('front.user_dashboard.dashboard');
    });
    Route::get('view-card', function () {
        return view('front.order.view-card');
    });
    Route::get('product-lists','ProductGridController@show');
    Route::post('productimg','ProductController@getProduct');
});
/*Login and Register*/
// Route::get('/login', function (){
//     return view('form_login.Login');
// });
Route::get('/sign_in', function (){
    return view('form_login.sign_in');
});

Route::get('/welcome', function (){
    return view('welcome');
});
Route::get('/home', function (){
    return view('home');
});
