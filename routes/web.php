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
    $data1['data'] = DB::table('tbl_category')->get();
    return view('front.homepages.homepage', $data1);
});
/*Route Admin page*/
// resource put delete update get show data post request
Route::group(['namespace' => 'Admin', 'prefix' => 'adminz'], function () {

    Route::get('/', 'StoreReportsController@index')->middleware('admin');
    Route::resource('user-account', 'AccountController')->middleware('admin');
    Route::resource('setting-types', 'SettingTypesController')->middleware('admin');
    Route::resource('setting-items', 'SettingItemsController')->middleware('admin');
    Route::resource('level-lists', 'LevelsController')->middleware('admin');
    Route::resource('brand-lists', 'BrandsController')->middleware('admin');
    Route::resource('log-activity', 'LogActivitysController')->middleware('admin');
    Route::resource('group-category', 'GroupCategoryController')->middleware('admin');
    Route::resource('category', 'CategoryController')->middleware('admin');
    Route::get('category-test', 'CategoryController@testCat')->middleware('admin');
    Route::resource('subcategory', 'SubCategoryController')->middleware('admin');
    Route::resource('tracking', 'TrackingsController')->middleware('admin');
    Route::resource('promotions', 'PromotionsController')->middleware('admin');
    Route::resource('products', 'ProductController')->middleware('admin');
    Route::resource('discount', 'DiscountsController')->middleware('admin');
    Route::resource('gallery', 'GalleriesController')->middleware('admin');
    Route::resource('disput', 'DisputController')->middleware('admin');
    Route::get('store-report', 'StoreReportsController@index')->middleware('admin');
    Route::get('users-report', 'UsersReportsController@index')->middleware('admin');
    Route::get('export', 'UsersReportsController@export_excel')->middleware('admin');
    Route::get('export-user', 'UsersReportsController@user_export')->middleware('admin');
    Route::resource('order', 'OrdersController')->middleware('admin');
});
/*Route Frontend*/
Route::group(['namespace' => 'front', 'prefix' => 'frontend'], function () {
    Route::get('order', 'OrderController@index');
    Route::get('detail', 'ProductController@index');
    Route::get('show-product-grid', 'ProductController@show');
    Route::get('detail', 'StorepageController@index');
    Route::get('home', 'HomeController@index');
    Route::get('contact', 'ContactController@index');
    Route::get('about', 'AboutController@index');
    Route::get('user-guide',function(){
        $data1['data'] = DB::table('tbl_category')->get();
        return view("front.user-guide",$data1);
    });
    Route::get('term-condition', 'TermConditionController@index');
    Route::get('product-add-to-card', function () {
        $data1['data'] = DB::table('tbl_category')->get();
        return view('front.pro_detail.product-order', $data1);
    });
    Route::get('view-card', function () {
        $cartItems = Cart::content();
        if ($cartItems == '') {
            return redirect('frontend/product-lists');
        }
        $data1['data'] = DB::table('tbl_category')->get();
        return view('front.checkout.checkout', $data1);
    })->middleware('auth');
    Route::get('product-lists', 'ProductGridController@show');
    Route::get('products/productdetails/{$id}', 'ProductController@show_product');
    Route::post('productimg', 'ProductController@getProduct');
});
//Route::resource('product/{$id}', 'ProductController');
Route::get('/product/{id}', 'ProductController@showproduct');
Route::get('/home', function () {
    $data['data'] = DB::table('tbl_category')->get();
    $data['user'] = Auth::user();
    return view('front.profiles.user', $data);
})->middleware('auth');

Route::get('/policy', function () {
    $data1['data'] = DB::table('tbl_category')->get();
    return view('front.abouts.policy_privacy', $data1);
});
Route::get('/privacy', function () {
    $data1['data'] = DB::table('tbl_category')->get();
    return view('front.abouts.policy_privacy', $data1);
});
Route::get('/order-success', function () {
    $data1['data'] = DB::table('tbl_category')->get();
    return view('front.checkout.order-success', $data1);
});

// Cart controller
Route::group(['middleware' => 'auth'], function () {
    Route::get('view-card', 'CartController@view_cart');
    Route::delete('delete', 'CartController@delete');
    Route::get('checkout', 'CheckoutController@checkout');
    Route::get('/profile', function () {
        $data['data'] = DB::table('tbl_category')->get();
        $data['user'] = Auth::user()->with('orders')->first();
        return view('front.profiles.user', $data);
    });
    Route::resource('user', 'UserController');
    Route::get('user', 'UserController@userShowOrder');
});
Route::resource('/cart', 'CartController');
Route::get('/cart/update/{id}', 'CartController@update');
Route::get('/cart/update/addcart/{id}', 'CartController@update_add_cart');
Route::get('remove-cart/{rowid}', 'CheckoutController@RemoveCart');
//Checkout or billing address
Route::resource('billing-address', 'CheckoutController@store');
Route::get('/auth/logout', 'CheckoutController@logout');
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Route::get('proDetail', function () {
    return view('front.pro_detail.product-order');
});
/*Twitter login*/
Route::post('/google/redirect', 'SocialAuthTwitterController@redirect');
Route::get('/google/callback', 'SocialAuthTwitterController@callback');
/*Login with G+*/
Route::get('/google/redirect', 'AuthController@redirectToGoogle');
Route::get('google/callback', 'AuthController@handleGoogleCallback');
/*Proceed Order*/
Route::get('/billing-address', 'front\ProceedOrderController@store');
Route::post('/billing-address', 'front\ProceedOrderController@store');
/*Search Auto complete*/
Route::get('/autoComplete', array('as' => 'autoComplete', 'uses' => 'ProductController@autoComplete'));
Route::get('/searchResult', array('as' => 'searchResult', 'uses' => 'ProductController@searchResult'));
Route::get('/searchCategory',array('as'=>'searchCategory','uses'=>'ProductController@searchCategory'));