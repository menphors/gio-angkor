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
    Route::get('/','StoreReportsController@index')->middleware('admin');
    Route::resource('user-account','AccountController')->middleware('admin');
    Route::resource('setting-types', 'SettingTypesController')->middleware('admin');
    Route::resource('setting-items', 'SettingItemsController')->middleware('admin');
    Route::resource('level-lists','LevelsController')->middleware('admin');
    Route::resource('brand-lists','BrandsController')->middleware('admin');
    Route::resource('log-activity','LogActivitysController')->middleware('admin');
    Route::resource('group-category','GroupCategoryController')->middleware('admin');
    Route::resource('category','CategoryController')->middleware('admin');
    Route::get('category-test','CategoryController@testCat')->middleware('admin');
    Route::resource('subcategory','SubCategoryController')->middleware('admin');
    Route::resource('tracking','TrackingsController')->middleware('admin');
    Route::resource('promotions','PromotionsController')->middleware('admin');
    Route::resource('products','ProductController')->middleware('admin');
    Route::resource('discount','DiscountsController')->middleware('admin');
    Route::resource('gallery','GalleriesController')->middleware('admin');
    Route::resource('disput','DisputController')->middleware('admin');
    Route::get('store-report','StoreReportsController@index')->middleware('admin');
    Route::get('users-report','UsersReportsController@index')->middleware('admin');
    Route::get('export','UsersReportsController@export_excel')->middleware('admin');
    Route::get('export-user','UsersReportsController@user_export')->middleware('admin');
    Route::resource('order','OrdersController')->middleware('admin');
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
Route::get('/home', function (){
    return view('front.user_dashboard.dashboard');
})->middleware('auth');
Route::get('/privacy', function (){
    return view('front.abouts.policy_privacy');
});
//Cart controller
Route::resource('/cart','CartController');
Route::delete('delete','CartController@delete');
Route::get('checkout','CheckoutController@checkout');
Route::get('remove-cart/{rowid}','CheckoutController@RemoveCart');
//Checkout or billing address
Route::resource('billing-address','CheckoutController@store');
Route::get('/auth/logout','CheckoutController@logout');




